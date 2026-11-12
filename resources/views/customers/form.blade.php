<label for="full_name">Full Name</label>
<input id="full_name" name="full_name" value="{{ old('full_name', $customer->full_name ?? '') }}" required maxlength="255">
@error('full_name')<span class="field-error">{{ $message }}</span>@enderror

<label for="email">Email</label>
<input id="email" type="email" name="email" value="{{ old('email', $customer->email ?? '') }}" required maxlength="255">
@error('email')<span class="field-error">{{ $message }}</span>@enderror

<label for="phone">Phone</label>
<input id="phone" name="phone" value="{{ old('phone', $customer->phone ?? '') }}" maxlength="30">
@error('phone')<span class="field-error">{{ $message }}</span>@enderror
