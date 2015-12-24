<div class="list-group-item">
    <h4 class="list-group-item-heading">{{ $event->title }}</h4>
    <p class="list-group-item-text">{{ $event->begin->diffForHumans() }} <i class="fa fa-at text-muted"></i> {{ $event->location }}</p>
</div>