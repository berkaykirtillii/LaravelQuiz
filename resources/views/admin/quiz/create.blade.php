<x-app-layout>
    <x-slot name="header">Create Quiz</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.store')}}">
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea rows="4" name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="mr-2">Is there deadline?</label>
                    <input type="checkbox" id="isFinished">
                </div>
                <div class="mb-3" style="display:none" id="finishInput">
                    <label>Finished At</label>
                    <input type="datetime-local" name="finished_at" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success float-right"> Create </button>
                </div>
            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $('#isFinished').change(function(){
                if($('#isFinished').is(':checked')){
                    $('#finishInput').show();
                }   
                else{
                    $('#finishInput').hide();
                }
            });
        </script>
    </x-slot>
</x-app-layout>