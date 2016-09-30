<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class ApiController extends Controller
{

    public function index() 
    {

        $tasks = Task::all();

        $data = [
            'status'  => 'success',
            'code'    => 200,
            'message' => 'List all tasks',
            'data'    => $tasks
        ];

        return response()->json($data);

    }
    
    public function create() 
    {
        $task = Task::create([
            'task'    => 'Taskss',
            'content' => 'aabbcc',
            'status'  => 'pending'
        ]);

        return response()->json($task);
    }

    public function store() 
    {
        $tasks = Task::all();

        return response()->json($tasks);
    }

    public function show($id = null) 
    {

        $task = Task::find($id);

        if ($task) {

            $data = [
                'status'  => 'success',
                'code'    => 200,
                'message' => 'Show record',
                'data'    => $task
            ];

        } else {

            $data = [
                'status'  => 'error',
                'code'    => 400,
                'message' => 'No results found.',
                'data'    => []
            ];

        }
        return response()->json($data);
    }


    public function edit(Request $request) 
    {

        if ($request->has('name')) {
            //
            $id = $request->input('id');
            $task = Task::where('id', $id)
                ->update([
                    'task'    => 'xxxx',
                    'content' => 'bbbbb',
                ]);

            if ($task) {

                $data = [
                    'status'  => 'success',
                    'code'    => 200,
                    'message' => 'The data were successfully updated.'
                ];

            } else {

                $data = [
                    'status'  => 'error',
                    'code'    => 400,
                    'message' => 'No row to be updated.'
                ];

            }
        } else {
            $data = [
                'status'  => 'Bad Request',
                'code'    => 400,
                'message' => 'Problem with the request, such as a missing, invalid or type mismatched parameter.'
            ];
        }

        return response()->json($data);
    }


    public function destroy($id) 
    {

        $task = Task::destroy($id);

        if ($task) {

            $data = [
                'status'  => 'success',
                'code'    => 200,
                'message' => 'The data were successfully deleted.'
            ];

        } else {

            $data = [
                'status'  => 'error',
                'code'    => 400,
                'message' => 'No row to be deleted.'
            ];

        }

        return response()->json($data);
        
    }

}
