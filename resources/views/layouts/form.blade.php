<form action="" method="post">
    <div class="form-group">
        <input v-model="form.name" type="text" name="name" id="name" placeholder="Name"
            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
        <has-error :form="form" field="name"></has-error>
    </div>

    <div class="form-group">
        <input v-model="form.email" type="email" name="email" id="email" placeholder="Email Address"
            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
        <has-error :form="form" field="email"></has-error>
    </div>

    <div class="form-group">
        <textarea v-model="form.bio" name="bio" id="bio" placeholder="Short bio (Optional)"
            class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
        <has-error :form="form" field="bio"></has-error>
    </div>

    <div class="form-group">
        <select v-model="form.type" name="type" id="type" class="form-control"
            :class="{ 'is-invalid': form.errors.has('type') }">
            <option value="">Select User Role</option>
            <option value="admin">Admin</option>
            <option value="user">Standerd User</option>
            <option value="author">Author</option>
        </select>
        <has-error :form="form" field="type"></has-error>
    </div>

    <div class="form-group">
        <input v-model="form.password" type="password" name="password" id="password"
            placeholder="Password" class="form-control"
            :class="{ 'is-invalid': form.errors.has('password') }">
        <has-error :form="form" field="password"></has-error>
    </div>
</form>