<div class="mb-3">
    <label>First Name</label>
    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $employee->first_name ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Last Name</label>
    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $employee->last_name ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Gender</label>
    <select name="gender" class="form-control" required>
        <option value="">Select</option>
        <option value="Male" {{ (old('gender', $employee->gender ?? '') == 'Male') ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ (old('gender', $employee->gender ?? '') == 'Female') ? 'selected' : '' }}>Female</option>
    </select>
</div>
<div class="mb-3">
    <label>Birthday</label>
    <input type="date" name="birthday" class="form-control" value="{{ old('birthday', $employee->birthday ?? '') }}" required>
</div>
<div class="mb-3">
    <label>Monthly Salary</label>
    <input type="number" step="0.01" name="monthly_salary" class="form-control" value="{{ old('monthly_salary', $employee->monthly_salary ?? '') }}" required>
</div>
