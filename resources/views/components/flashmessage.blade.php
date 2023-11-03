@if(session()->has('message'))
<div class="bg-success mx-auto p-1 text-centre" style="width: 400px;" x-data="{show: true}" x-init="setTimeout(()=> show = false,3000)" x-show="show">
<p>{{session('message')}}</p>
</div>

@endif