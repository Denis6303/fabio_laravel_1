@extends('base')
@section('content')
@include('partials.content.banner')
@include('partials.content.partner')
@include('partials.content.about')
@include('partials.content.feature')
@include('partials.content.service')
@include('partials.content.roadmap')
@include('partials.content.pricing')
@include('partials.content.team')
@include('partials.content.blog')
@include('partials.content.testimonial')
@include('partials.content.faq')
@include('partials.content.cta')
@endSection

<!-- <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>Select2 with Pagination and ID Display</h1>
      </div>
      <select id='channel_id' style='width: 200px;'>
        <option value='0'>- Search Channel -</option>
      </select>
    </div>
    
    <script type="text/javascript" src='//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
      $("#channel_id").select2({
        placeholder: 'Channel...',
        allowClear: true,
        ajax: {
          url: '{{ url("dataforselect2") }}',
          dataType: 'json',
          delay: 250,
          data: function(params) {
            return {
              term: params.term || '',
              page: params.page || 1
            };
          },
          cache: true
        },
        templateResult: function (data) {
          // Display the ID and Name together
          if (!data.id) { // no result from Select2 query
            return data.text;
          }
          return data.id + " - " + data.text; // id and name
        },
        templateSelection: function (data) {
          // Display the ID and Name when selected
          return data.id + " - " + data.text;
        }
      });
    </script>
  </body>
</html> -->