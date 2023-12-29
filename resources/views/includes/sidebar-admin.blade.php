<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img
        src="/images/dashboard/admin.png"
        alt="Logo Dashboard"
        class="my-4 mt-5"
        style="max-width: 120px"
      />
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('admin-dashboard') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin')) ? 'active' : '' }}"
        >Dashboard</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('product.index') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/product*')) ? 'active' : '' }}"
        >Products</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('category.index') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : '' }}"
        >Categories</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="#"
        class="list-group-item list-group-item-action"
        >Transactions</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('user.index') }}"
        class="list-group-item list-group-item-action {{ (request()->is('admin/user*')) ? 'active' : '' }}"
        >Users</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a href="{{ route('home') }}" class="list-group-item list-group-item-action"
        >Sign Out</a
      >
    </div>
</div>