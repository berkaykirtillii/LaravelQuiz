<x-app-layout>
    <x-slot name="header"> Quizzes </x-slot>

    <div class="card">
        <div class="card-body">
           <h5 class="card-title">
               <a href="{{route('quizzes.create')}}" class="btn btn-primary btn-sm">
                   <i class="fa fa-plus"></i> Create Quiz</a>
           </h5>
           <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Quiz</th>
                <th scope="col">Status</th>
                <th scope="col">Finish At</th>
                <th scope="col">Transactions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($quizzes as $quiz)
              <tr>
                <td>{{$quiz->title}}</td>
                <td>{{$quiz->status}}</td>
                <td>{{$quiz->finished_at}}</td>
                <td>
                  <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                  <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
           {{$quizzes->links()}}
        </div>
    </div>
</x-app-layout>
