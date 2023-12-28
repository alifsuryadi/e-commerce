<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img
        src="/images/dashboard-store-logo.svg"
        alt="Logo Dashboard"
        class="my-4"
      />
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard') }}"
        class="list-group-item list-group-item-action"
        >Dashboard</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-product') }}"
        class="list-group-item list-group-item-action"
        >My Products</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-transaction') }}"
        class="list-group-item list-group-item-action"
        >Transactions</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-settings-store') }}"
        class="list-group-item list-group-item-action"
        >Store Settings</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a
        href="{{ route('dashboard-settings-account') }}"
        class="list-group-item list-group-item-action"
        >My Account</a
      >
    </div>
    <div class="list-group list-group-flush">
      <a href="{{ route('home') }}" class="list-group-item list-group-item-action"
        >Sign Out</a
      >
    </div>
</div>