<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\NotificationType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        $notifications = $user->userNotifications; // يفترض أن لديك علاقة في موديل User تعيد إشعارات المستخدم
        $notificationTypes = NotificationType::all();

        return \view('profile.index', compact('user', 'notifications', 'notificationTypes'));
    }

    public function updateNotifications(Request $request)
    {

        $request->validate([
            'notification.*' => 'nullable',
            'notification' => ['required', 'array', 'min:1'], // تحديد رسالة مخصصة للتحقق من الحد الأدنى لعناصر القائمة
        ], [
            'notification.min' => 'يجب اختيار عنصر واحد على الأقل من الإشعارات.',
        ]);

        $user = auth()->user(); // الحصول على المستخدم الحالي

        $user->notificationSettingss()->sync($request->notification);
        return redirect()->back();

    }


    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // User notification

    public function notifications(){

    }
}
