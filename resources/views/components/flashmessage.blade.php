@if(session()->has('message'))
<div class="bg-success mx-auto p-5" style="width: 200px;  border-radius: 10px" x-data="{show: true}" x-init="setTimeout(()=> show = false,3000)" x-show="show">
<p>{{session('message')}}</p>
</div>

@endif