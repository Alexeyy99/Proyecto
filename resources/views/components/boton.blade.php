@props(['color'])

<button type="button" class="btn btn-{{$color}}">

{{$slot}}

</button>
