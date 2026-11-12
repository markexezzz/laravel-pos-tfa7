<label for="username">Username</label>
<input id="username" name="username" value="{{ old('username', $user->username ?? '') }}" required maxlength="100">
@error('username')<span class="field-error">{{ $message }}</span>@enderror

<label for="full_name">Full Name</label>
<input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name ?? '') }}" required maxlength="255">
@error('full_name')<span class="field-error">{{ $message }}</span>@enderror
