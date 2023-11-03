@extends(auth()->user()->user_role === 'employee' ? 'staffhome' : 'home')

@section('content')

<section class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ranking </h1>
        </div>
        
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
            
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Employee List</li>
          </ol>
        </div>
      </div>
</section>

    
 

<div class="card">
    <div class="card-body p-0">
        <table class="table table-striped projects">
            
            <tbody>
                @php
                $employeeTotals = [];
                @endphp

                @foreach($reviews as $review)
                    @php
                    // Calculate the total rating for this review
                    $total = (
                        (int)$review->answer1_personalrate + (int)$review->answer2_personalrate + (int)$review->answer3_personalrate +
                        (int)$review->answer4_personalrate + (int)$review->answer5_personalrate + (int)$review->answer6_personalrate +
                        (int)$review->answer7_personalrate + (int)$review->answer8_personalrate + (int)$review->answer9_personalrate +
                        (int)$review->answer10_personalrate + (int)$review->answer1_seniormanagerrate + (int)$review->answer2_seniormanagerrate +
                        (int)$review->answer3_seniormanagerrate + (int)$review->answer4_seniormanagerrate + (int)$review->answer5_seniormanagerrate +
                        (int)$review->answer6_seniormanagerrate + (int)$review->answer7_seniormanagerrate + (int)$review->answer8_seniormanagerrate +
                        (int)$review->answer9_seniormanagerrate + (int)$review->answer10_seniormanagerrate + (int)$review->answer1_linemanagerrate +
                        (int)$review->answer2_linemanagerrate + (int)$review->answer3_linemanagerrate + (int)$review->answer4_linemanagerrate +
                        (int)$review->answer5_linemanagerrate + (int)$review->answer6_linemanagerrate + (int)$review->answer7_linemanagerrate +
                        (int)$review->answer8_linemanagerrate + (int)$review->answer9_linemanagerrate + (int)$review->answer10_linemanagerrate
                    );

                    if ($review->job_title === 'line manager') {
                        $total = ($total /= 2) + (int)$review->seniormanager_evaluation1 + (int)$review->seniormanager_evaluation2 +
                            (int)$review->seniormanager_evaluation3 + (int)$review->seniormanager_evaluation4 +
                            (int)$review->seniormanager_evaluation5 + (int)$review->linemanager_rating1 + (int)$review->linemanager_rating2 +
                            (int)$review->linemanager_rating3 + (int)$review->linemanager_rating4 + (int)$review->linemanager_rating5;
                    } else {
                        $total = ($total /= 3) + (int)$review->seniormanager_evaluation1 + (int)$review->seniormanager_evaluation2 +
                            (int)$review->seniormanager_evaluation3 + (int)$review->seniormanager_evaluation4 +
                            (int)$review->seniormanager_evaluation5 + (int)$review->linemanager_rating1 + (int)$review->linemanager_rating2 +
                            (int)$review->linemanager_rating3 + (int)$review->linemanager_rating4 + (int)$review->linemanager_rating5;
                    }

                    // Add the total to the employee's total (grouped by name)
                    $employeeName = $review->name;
                    if (!isset($employeeTotals[$employeeName])) {
                        $employeeTotals[$employeeName] = 0;
                    }
                    $employeeTotals[$employeeName] += $total;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Sort employees by total rating in descending order -->
@php
arsort($employeeTotals);
$ranking = 0;
@endphp

<!-- Display the total ranking, employee name, job title, group, and total rating in a table -->
<div class="card">
    <div class="card-body p-0">
        <table class="table table-striped projects">
    <thead>
        <tr>
            <th>Total Ranking</th>
            <th>Employee Name</th>
            <th>Job Title</th>
            <th>Group</th>
            <th>Total Rating</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employeeTotals as $employeeName => $totalRating)
            @php
            $ranking++;
            @endphp
            <tr>
                <td>{{ $ranking }}</td>
                <td>{{ $employeeName }}</td>
                <td>{{ $reviews->firstWhere('name', $employeeName)->job_title }}</td>
                <td>{{ $reviews->firstWhere('name', $employeeName)->group_name }}</td>
                <td>{{ number_format($totalRating, 2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

@endsection
