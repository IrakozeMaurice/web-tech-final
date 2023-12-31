@extends('layouts.teacher.dashboard')

@section('content')
  <div>

    @if (session('success'))
      <div class="notification is-primary">
        <strong>{{ session('success') }}</strong>
      </div>
    @endif

    <div class="box mb-4">
      <h2><b>My courses</b></h2>
    </div>

    <table id="tableSearch" class="table mt-2 small">
      <thead>
        <tr>
          <th>Course code</th>
          <th>Course Name</th>
          <th>Credits</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $course)
          <tr>
            <td>{{ $course->code }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->credits }}</td>
            <td><a href="{{ route('teacher.marks.create', $course->code) }}"
                class="button is-small has-background-info has-text-white">Upload marks</a></td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tfoot>
    </table>
    <div class="box mt-4">
      <h2><b>My Recently uploaded marks</b></h2>
    </div>
    <table id="tableSearch2" class="table mt-2 small">

      <thead>
        <tr>
          <th>Marks title</th>
          <th>Course code</th>
          <th>Course name</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($marks as $mark)
          <tr>
            <td>{{ $mark->title }}</td>
            <td>{{ $mark->course->code }}</td>
            <td>{{ $mark->course->name }}</td>
          </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>
@endsection


@section('dataTableFooter')
  {{-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script> --}}

  <script>
    $(document).ready(function() {
      $.noConflict();
      $('#tableSearch').DataTable({
        "order": []
      });
      $('#tableSearch2').DataTable({
        "order": []
      });
    });
  </script>
@endsection
{{-- @yield('scripts')

  @yield('dataTableFooter') --}}
