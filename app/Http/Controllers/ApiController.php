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
     * @param  [int id]
     * @return [json]
     */
    public function show($id = null) 
    {

        $task = Task::find($id);

        if ($task) {

            $data = [
                'code'    => 200,
                'message' => 'OK',
                'data'    => $task
            ];

        } else {

            $data = [
                'code'    => 400,
                'message' => 'Bad request',
            ];

        }

        return response()->json($data);
    }


    /**
     *  Create a new task
     * @param  [int id]
     * @param  [varchar subject]
     * @param  [text content]
     * @return [json]
     */
    public function create(Request $request) 
    {

        if ($request->has('subject') && $request->has('content')) {

            $subject = $request->input('subject');
            $content = $request->input('content');

            $task = Task::create([
                'subject' => $subject,
                'content' => $content,
            ]);

            $data = [
                'code'    => 201,
                'message' => 'Created',
                'data'    => $task
            ];
        } else {

            $data = [
                'code'    => 400,
                'message' => 'Bad request',
            ];
        }

        return response()->json($data);
    }


    /**
     * Edit task
     * @param  [int id]
     * @param  [varchar subject]
     * @param  [text content]
     * @return [json]
     */
    public function edit($id = null, Request $request) 
    {

        if ($id && $request->has('subject') && $request->has('content')) {

            $subject = $request->input('subject');
            $content = $request->input('content');

            $task = Task::where('id', $id)
                ->update([
                    'subject' => $subject,
                    'content' => $content,
                ]);

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
        } else {

            $data = [
                'code'    => 400,
                'message' => 'Bad request'
            ];

        }

        return response()->json($data);
    }


    /**
     * @param  [int id]
     * @param  [status pending or done]
     * @return [json]
     */
    public function status($id = null, Request $request) 
    {

        if ($id && $request->has('status') && ($request->input('status') == 'pending' || $request->input('status') == 'done')) {

            $status = $request->input('status');

            $task   = Task::where('id', $id)
                ->update([ 'status' => $status ]);

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
        } else {

            $data = [
                'code'    => 400,
                'message' => 'Bad request'
            ];

        }

        return response()->json($data);
    }


    /**
     * Delete task
     * @param  [int id]
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
