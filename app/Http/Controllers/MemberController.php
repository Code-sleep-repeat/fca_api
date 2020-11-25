<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return Member::all();
    }

    public function show(Member $member)
    {
        return $member;
    }

    public function store(Request $request)
    {
        $member = Member::create($request->all());

        return response()->json($member, 201);
    }

    public function update(Request $request, Member $member)
    {
        $member->update($request->all());

        return response()->json($member, 200);
    }

    public function delete(Member $member)
    {
        $member->delete();

        return response()->json(null, 204);
    }
}
