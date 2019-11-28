<div class="row">
{{--    <div class="col-4">--}}
{{--        <form action="{{ route('task.opened', $task->id) }}" method="POST">--}}
{{--            @csrf--}}
{{--            <button type="submit" class="btn text-info">--}}
{{--                <i class="fas fa-2x fa-step-backward"></i>--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
    <div class="col-4">
        <form action="{{ route('task.production', $task->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn text-production">
                <i class="fab fa-2x fa-product-hunt"></i>
            </button>
        </form>
    </div>
    <div class="col-4">
        <form action="{{ route('task.pendent', $task->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn text-pendent">
                <i class="fas fa-2x fa-stop-circle"></i>
            </button>
        </form>
    </div>
</div>
<div class="row mt-2">
    <div class="col-4">
        <form action="{{ route('task.aprove', $task->id) }}" method="POST">
            @csrf
            <button type="submits" class="btn text-aprove">
                <i class="fas fa-2x fa-check"></i>
            </button>
        </form>
    </div>
    <div class="col-4">
        <form action="{{ route('task.completed', $task->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn text-closed">
                <i class="fas fa-2x fa-check-double"></i>
            </button>
        </form>
    </div>
{{--    <div class="col-4">--}}
{{--        <form action="{{ route('task.destroy', $task->id) }}" method="POST">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <button type="submit" class="btn text-info">--}}
{{--                <i class="far fa-2x fa-trash-alt"></i>--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
</div>
