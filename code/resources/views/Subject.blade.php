@extends('layouts.master')

@section('title', 'Subject')

@section('head')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href={{url('/plugins/datepicker/datepicker3.css')}}>
  <!-- Select2 -->
  <link rel="stylesheet" href={{url('/plugins/select2/select2.min.css')}}>
  <!-- bootstrap timepicker -->
  <link rel="stylesheet" href={{url('/plugins/timepicker/bootstrap-timepicker.css')}}>

@endsection

@section('content')
  @section('description', 'Your Subject')
  <div class="col-md-3">
    <div class="row">
      <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#newTaskModal">New Task</button>
    </div>
    </br>
    <div class="row">
      <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#newExamModal">New Exam</button>
    </div>
    </br>
    <div class="row">
      <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#newScheduleModal">New Schedule</button>
    </div>
  </div>

<div class="col-md-3 col-md-offset-2">
  <div class="row">
    <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#showTasksModal">Show Tasks</button>
  </div>
  </br>
  <div class="row">
    <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#showExamsModal">Show Exams</button>
  </div>
  </br>
  <div class="row">
    <button type="button" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#showSchedulesModal">Show Schedules</button>
  </div>
</div>
@endsection

@section('page_end')
  @include('layouts.subject_modals')
@endsection

@section('include_js')
  <!-- Datepicker -->
  <script src={{url('/plugins/datepicker/bootstrap-datepicker.js')}}></script>
  <!-- Timepicker -->
  <script src={{url('/plugins/timepicker/bootstrap-timepicker.min.js')}}></script>
  <!-- Select2 -->
  <script src={{url('/plugins/select2/select2.min.js')}}></script>

  <script src={{url('/resources/js/pages/subject.js')}}></script>
@endsection

