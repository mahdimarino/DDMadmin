

@props(['listing'])

<x-card>

  <tr>
    <td><a  href="/listing/{{$listing['id']}}">{{$listing['id']}}</a></td>
    <td><img style="width: 50px; height: 50px" src="{{$listing->logo ? asset('storage/' . $listing->logo) : '' }}" alt="">
    </td>
    <td>{{$listing['title']}}</td>
    <td>{{$listing['description']}}</td>
    <td><x-tags :tagsCsv="$listing->tags" /></td>
    <td>
      
    </td>
    <td style="display: flex; ">
      <span>
          <a href="/listing/{{$listing->id}}/edit">
              <i class="nav-icon fas fa-edit"></i>
          </a>
      </span>
      <span>
          <form method="POST" action="/listing/{{$listing->id}}">
              @csrf
              @method('DELETE')
              <button class="mx-2" type="submit">
                <i class="nav-icon fa fa-trash" aria-hidden="true"></i>

              </button>
          </form>
      </span>
  </td>
  
  </tr>
  <tr>

  

</x-card>

