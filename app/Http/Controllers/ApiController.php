<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class ApiController extends Controller
{

    /**
     * List all task
     * @return [json]
     */
    public function index() 
    {

        $tasks = Task::all();

        $data = [
            'code'    => 200,
            'message' => 'OK',
            'data'    => $tasks
        ];

        return response()->json($data);

    }

    /**
     * Show single task
     * @param  [int]
     * @return [json]
     */
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


    /**
     * @param  Request
     * @return [type]
     */
    public function create(Request $request) 
    {

        $task    = $request->input('id');
        $content = $request->input('id');

        $task = Task::create([
            'subject' => $task,
            'content' => $content,
        ]);

        return response()->json($task);
    }


    /**
     * @param  Request
     * @return [type]
     */
    public function edit($id = null, Request $request) 
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



    public function status($id = null, Request $request) 
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


    /**
     * Delete task
     * @param  [int]
     * @return [json]
     */
    public function destroy($id = null) 
    {

        $task = Task::destroy($id);

        if ($task) {

            $data = [
                'code'    => 200,
                'message' => 'OK'
            ];

        } else {

            $data = [
                'code'    => 204,
                'message' => 'No task'
            ];

        }

        return response()->json($data);
        
    }

}
