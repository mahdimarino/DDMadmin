@if(session()->has('message'))
<div style="height: 50px; width: 200px;" x-data="{show: true}" x-init="setTimeout(()=> show = false,3000)" x-show="show">
<p>{{session('message')}}</p>
</div>

@endif