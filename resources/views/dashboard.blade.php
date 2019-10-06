@extends('layouts.app')

@section('content')
<div class="row no-gutters">
    <div class="col-12">
        <nav>
            <div class="nav nav-tabs bg-bluevc text-white" id="nav-tab-panels" role="tablist">
                <a class="nav-item mx-auto my-auto nav-link active" id="nav-tasks-tab" data-toggle="tab" href="#nav-tasks" role="tab" aria-controls="nav-tasks" aria-selected="true"><i class="fas fa-tasks fa-2x"></i></a>
                <a class="nav-item mx-auto my-auto nav-link" id="nav-calendar-tab" data-toggle="tab" href="#nav-calendar" role="tab" aria-controls="nav-calendar" aria-selected="false"><i class="fas fa-calendar-alt fa-2x"></i></a>
                <a class="nav-item mx-auto my-auto nav-link" id="nav-dollar-tab" data-toggle="tab" href="#nav-dollar" role="tab" aria-controls="nav-dollar" aria-selected="false"><i class="fas fa-file-invoice-dollar fa-2x"></i></a>
                <a class="nav-item mx-auto my-auto nav-link" id="nav-tools-tab" data-toggle="tab" href="#nav-tools" role="tab" aria-controls="nav-tools" aria-selected="false"><i class="fas fa-tools fa-2x"></i></a>
                <a class="nav-item mx-auto my-auto nav-link" id="nav-cogs-tab" data-toggle="tab" href="#nav-cogs" role="tab" aria-controls="nav-cogs" aria-selected="false"><i class="fas fa-cogs fa-2x"></i></a>  
            </div>
        </nav>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-tasks" role="tabpanel" aria-labelledby="nav-tasks-tab">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</div>
                        <div class="tab-pane fade" id="nav-calendar" role="tabpanel" aria-labelledby="nav-calendar-tab">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</div>
                        <div class="tab-pane fade" id="nav-dollar" role="tabpanel" aria-labelledby="nav-dollar-tab">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</div>
                        <div class="tab-pane fade" id="nav-tools" role="tabpanel" aria-labelledby="nav-tools-tab">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</div>
                        <div class="tab-pane fade" id="nav-cogs" role="tabpanel" aria-labelledby="nav-cogs-tab">Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
