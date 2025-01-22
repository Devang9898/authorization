<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function attachRole(Request $request, $memberId)
    {
        $member = Member::find($memberId);
        $roleId = $request->input('role_id');
        
        $member->roles()->attach($roleId);
        return response()->json(['message' => 'Role attached successfully']);
    }
    public function detachRole(Request $request, $memberId)
    {
        $member = Member::find($memberId);
        $roleId = $request->input('role_id');
        
        $member->roles()->detach($roleId);
        return response()->json(['message' => 'Role detached successfully']);
    }
    public function syncRoles(Request $request, $memberId)
    {
        $member = Member::find($memberId);
        $roleIds = $request->input('role_ids');
        
        $member->roles()->sync($roleIds);
        return response()->json(['message' => 'Roles synchronized successfully']);
    }
}
