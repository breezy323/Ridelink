<head>
  <title>
  @section('title')
    @if (!empty($title))
      {{$title}}
    @endif
  @show
  </title>

  {{stylesheet('main.css')}}
</head>