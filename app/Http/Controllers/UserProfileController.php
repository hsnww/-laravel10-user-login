<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // استبدل بمسار النموذج الخاص بك إذا كان مختلفًا
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user(); // الحصول على المستخدم الحالي

        // التحقق من صحة الطلب
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:max_width=1300,max_height=1300',
        ]);

        // تحديث الحقول
        $user->name = $request->name;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->company = $request->company;
        $user->job = $request->job;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->twitter = $request->twitter;
        $user->facebook = $request->facebook;
        $user->instagram = $request->instagram;
        $user->linkedin = $request->linkedin;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Resize image
            list($width, $height) = getimagesize($image);
            $maxSize = 400;
            $ratio = $width / $height;

            if ($ratio > 1) {
                $newWidth = $maxSize;
                $newHeight = $maxSize / $ratio;
            } else {
                $newWidth = $maxSize * $ratio;
                $newHeight = $maxSize;
            }

            $newImage = imagecreatetruecolor($newWidth, $newHeight);

            switch ($image->getClientOriginalExtension()) {
                case 'jpeg':
                case 'jpg':
                    $source = imagecreatefromjpeg($image);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($image);
                    break;
                case 'png':
                    $source = imagecreatefrompng($image);
                    break;
                default:
                    throw new Exception('Unsupported image type.');
            }

            imagecopyresampled($newImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            // Save the new image
            $path = public_path('uploads/users/' . $filename);
            switch ($image->getClientOriginalExtension()) {
                case 'jpeg':
                case 'jpg':
                    imagejpeg($newImage, $path);
                    break;
                case 'gif':
                    imagegif($newImage, $path);
                    break;
                case 'png':
                    imagepng($newImage, $path);
                    break;
            }

            imagedestroy($newImage);

            // Save the path in the database or do something else with it
            $user->image = $filename;

        }


        $user->save(); // حفظ التغييرات في قاعدة البيانات

        // إعادة توجيه المستخدم مع رسالة نجاح
        return back()->with('success', 'Profile updated successfully!');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required|current_password',
            'new_password' => 'required|min:8|confirmed',
        ], [
            'current_password.current_password' => 'كلمة المرور الحالية غير صحيحة.',
            'current_password.required' => 'يجب عليك إدخال كلمة المرور الحالية.',
            'new_password.required' => 'يجب عليك إدخال كلمة مرور جديدة.',
            'new_password.min' => 'يجب أن تكون كلمة المرور الجديدة مكونة من 8 أحرف على الأقل.',
            'new_password.confirmed' => 'كلمتا المرور غير متطابقتين.',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['errors' => ['Current password does not match']], 422);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
