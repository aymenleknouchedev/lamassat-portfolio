<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Show all skills for the user
     */
    public function index()
    {
        $skills = Auth::user()->skills()->orderBy('created_at', 'desc')->get();
        return view('dashboard.skills', compact('skills'));
    }

    /**
     * Store a new skill
     */
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:50',
        ]);

        // Add user_id
        $validated['user_id'] = Auth::id();

        // Create skill
        Skill::create($validated);

        return redirect()->route('skills.index')
                       ->with('success', 'Skill created successfully!');
    }

    /**
     * Update a skill
     */
    public function update(Request $request, Skill $skill)
    {
        // Check authorization
        $user = $request->user();
        if (!$user || $skill->user_id !== $user->id) {
            abort(403);
        }

        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:50',
        ]);

        // Update skill
        $skill->update($validated);

        return redirect()->route('skills.index')
                       ->with('success', 'Skill updated successfully!');
    }

    /**
     * Delete a skill
     */
    public function destroy(Request $request, Skill $skill)
    {
        // Ensure the user owns this skill
        $user = $request->user();
        if (!$user || $skill->user_id !== $user->id) {
            abort(403, 'You are not authorized to delete this skill.');
        }

        $skill->delete();

        return redirect()->route('skills.index')
                       ->with('success', 'Skill deleted successfully!');
    }
}
