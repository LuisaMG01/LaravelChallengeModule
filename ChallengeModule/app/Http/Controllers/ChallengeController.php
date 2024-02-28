<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the challenges.
     *
     * @return \Illuminate\View\View
     */
    public function index_challenge(): View
    {
        // Get all challenges
        $challenges = Challenge::all();

        $viewData = [
            "title" => "Challenges - Online Store",
            "subtitle" => "List of Challenges",
            "challenges" => $challenges,
        ];

        return view('challenge.index_challenge')->with("viewData", $viewData);
    }

    /**
     * Display the specified challenge.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function show_challenge(string $id): View
    {
        // Find the challenge by ID
        $challenge = Challenge::findOrFail($id);

        $viewData = [
            "title" => $challenge->name . " - Online Store",
            "subtitle" => $challenge->name . " - Challenge information",
            "challenge" => $challenge,
        ];

        return view('challenge.show_challenge')->with("viewData", $viewData);
    }

    /**
     * Show the form for creating a new challenge.
     *
     * @return \Illuminate\View\View
     */
    public function create_challenge(): View 
    { 
        $viewData = [
            "title" => "Create product"
        ]; 

        return view('challenge.create_challenge')->with("viewData", $viewData); 
    }

    /**
     * Store a newly created challenge in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save_challenge(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string',
            'reward_coins' => 'required|numeric|min:0',
            'max_users' => 'required|integer|min:0',
            'product_name' => 'required|string',
            'product_quantity' => 'required|integer|min:0',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new challenge if validation is successful
        $challenge = new Challenge($request->only([
            'name',
            'description',
            'reward_coins',
            'max_users',
            'product_name',
            'product_quantity'
        ]));

        $challenge->current_users = 0;
        $challenge->checked = false;
        $challenge->save();

        return redirect()->back()->with('success', 'Challenge created successfully!');
    }

    /**
     * Remove the specified challenge from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete_challenge($id)
    {
        // Find the challenge by ID and delete it
        $challenge = Challenge::findOrFail($id);
        $challenge->delete();

        return redirect()->route('challenge.index_challenge')->with('success', 'Challenge deleted successfully!');
    }
}
