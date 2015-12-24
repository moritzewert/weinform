@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-1"><i class="fa fa-bookmark fa-2x"></i></div>
                <div class="col-sm-11">
                    <h4>XXX hat ein Event erstellt</h4>
                    <p>sadnadnsa sad naslkndanskjdnsakjdnsands</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"><i class="fa fa-bookmark fa-2x"></i></div>
                <div class="col-sm-11">
                    <h4>XXX hat ein Event erstellt</h4>
                    <p>sadnadnsa sad naslkndanskjdnsakjdnsands</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">Events</div>

                <div class="list-group">
                    @each('events.list.small', $user->attends, 'event')
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">Your Groups</div>

                <div class="list-group">
                    <div class="list-group-item">Foobar</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
