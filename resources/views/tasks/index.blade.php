
@include('includes.head')
<table>
    <thead>
        <tr><th>id</th><th>name</th><th>desc</th><th>update</th><th>delete</th></tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr><td>{{$task->id}}</td><td><textarea type="text" name="title" value="{{$task->title}}">{{$task->title}}</textarea></td><td><textarea type="text" name="title" value="{{$task->body}}">{{$task->body}}</textarea></td><td><input type="submit" class="update" id="{{ $task->id }}" value="update"></td><td><a href="test">delete</a></td></tr>
        @endforeach
    </tbody>
</table>
