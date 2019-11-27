<li class="list-group-item">
    <div class="row">
        <div class="col-9 pl-1 pr-0">
            <h5>{{ $task->title }}</h5>
            <p>{{ $task->description }}</p>
        </div>
            <div class="col-3 pl-0 pr-0">
                @include('panels.tasks.partials.task_actions')
                {{--        @include('panels.tasks.partials.badgets')--}}
            </div>
    </div>
</li>
