<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('public.home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('About', route('public.about'));
});

// Home > Terms
Breadcrumbs::register('terms', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Terms and Conditions', route('terms'));
});

// Home > Privacy
Breadcrumbs::register('privacy', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Privacy Policy', route('privacy'));
});

// Home > Help
Breadcrumbs::register('help', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Help', route('help'));
});

// Home > Profile
Breadcrumbs::register('profiles.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Profile', route('profiles.index'));
});



// Complaint RESTFUL Breadcrumb

// Complaint
Breadcrumbs::register('complaints.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Complaints', route('complaints.index'));
});

// Complaint > Create Complaint
Breadcrumbs::register('complaints.create', function($breadcrumbs)
{
    $breadcrumbs->parent('complaints.index');
    $breadcrumbs->push('Create', route('complaints.create'));
});

// Complaint > [ID]
Breadcrumbs::register('complaints.show', function($breadcrumbs, $complaint)
{
    $breadcrumbs->parent('complaints.index');
    $breadcrumbs->push('ID '.$complaint->id, route('complaints.show', $complaint->id));
});

// Complaint > [ID] > Edit Complaint
Breadcrumbs::register('complaints.edit', function($breadcrumbs, $complaint)
{
    $breadcrumbs->parent('complaints.show', $complaint);
    $breadcrumbs->push('Edit', route('complaints.edit', $complaint->id));
});

// Polling RESTFUL Breadcrumb

// Polling
Breadcrumbs::register('polls.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Polls', route('polls.index'));
});

// Polling > Create Polling
Breadcrumbs::register('polls.create', function($breadcrumbs)
{
    $breadcrumbs->parent('polls.index');
    $breadcrumbs->push('Create', route('polls.create'));
});

// Polling > [ID]
Breadcrumbs::register('polls.show', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('polls.index');
    $breadcrumbs->push('ID '.$list->id, route('polls.show', $list->id));
});

// Polling > [ID] > Edit Polling
Breadcrumbs::register('polls.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('polls.show', $list);
    $breadcrumbs->push('Edit', route('polls.edit', $list->id));
});



// Apartment RESTFUL Breadcrumb

// Apartment
Breadcrumbs::register('apartments.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Apartments', route('apartments.index'));
});

// Apartment > Create Apartment
Breadcrumbs::register('apartments.create', function($breadcrumbs)
{
    $breadcrumbs->parent('apartments.index');
    $breadcrumbs->push('Create', route('apartments.create'));
});

// Apartment > [ID]
Breadcrumbs::register('apartments.show', function($breadcrumbs, $apartment)
{
    $breadcrumbs->parent('apartments.index');
    $breadcrumbs->push($apartment->id, route('apartments.show', $apartment->id));
});

// Apartment > [ID] > Edit Apartment
Breadcrumbs::register('apartments.edit', function($breadcrumbs, $apartment)
{
    $breadcrumbs->parent('apartments.show', $apartment);
    $breadcrumbs->push('Edit', route('apartments.edit', $apartment->id));
});


// Classified RESTFUL Breadcrumb

// Classified
Breadcrumbs::register('classifieds.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Apartment', route('classifieds.index'));
});

// Classified > Create Classified
Breadcrumbs::register('classifieds.create', function($breadcrumbs)
{
    $breadcrumbs->parent('classifieds.index');
    $breadcrumbs->push('Create', route('classifieds.create'));
});

// Classified > [ID]
Breadcrumbs::register('classifieds.show', function($breadcrumbs, $classified)
{
    $breadcrumbs->parent('classifieds.index');
    $breadcrumbs->push($classified->id, route('classifieds.show', $classified->id));
});

// Classified > [ID] > Edit Classified
Breadcrumbs::register('classifieds.edit', function($breadcrumbs, $classified)
{
    $breadcrumbs->parent('classifieds.show', $classified);
    $breadcrumbs->push('Edit', route('classifieds.edit', $classified->id));
});



// Apartmentassociation RESTFUL Breadcrumb

// Apartmentassociation
Breadcrumbs::register('apartmentsassociate.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('My Apartments', route('apartmentsassociate.index'));
});


// Apartment Admin RESTFUL Breadcrumb

// Apartment Admin
Breadcrumbs::register('apartmentadmin.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Admin Panel', route('apartmentadmin.index'));
});


// Adduser (members) RESTFUL Breadcrumb

// User Index
Breadcrumbs::register('members.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('User List', route('members.index'));
});

// User > Create Classified
Breadcrumbs::register('members.create', function($breadcrumbs)
{
    $breadcrumbs->parent('members.index');
    $breadcrumbs->push('Create', route('members.create'));
});

// User > [ID]
Breadcrumbs::register('members.show', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('members.index');
    $breadcrumbs->push($user->id, route('members.show', $user->id));
});

// User > [ID] > Edit Classified
Breadcrumbs::register('members.edit', function($breadcrumbs, $user)
{
    $breadcrumbs->parent('members.show', $user);
    $breadcrumbs->push('Edit', route('members.edit', $user->id));
});


// Ledger RESTFUL Breadcrumb

// Index
Breadcrumbs::register('ledger.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Ledger', route('ledger.index'));
});

// Ledger > Create Ledger
Breadcrumbs::register('ledger.create', function($breadcrumbs)
{
    $breadcrumbs->parent('ledger.index');
    $breadcrumbs->push('Create', route('ledger.create'));
});

// Ledger > [ID]
Breadcrumbs::register('ledger.show', function($breadcrumbs, $ledger)
{
    $breadcrumbs->parent('ledger.index');
    $breadcrumbs->push($ledger->id, route('ledger.show', $ledger->id));
});

// Ledger > [ID] > Edit Ledger
Breadcrumbs::register('ledger.edit', function($breadcrumbs, $ledger)
{
    $breadcrumbs->parent('ledger.show', $ledger);
    $breadcrumbs->push('Edit', route('ledger.edit', $ledger->id));
});


// Staff RESTFUL Breadcrumb

// Index
Breadcrumbs::register('staffs.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Staffs', route('staffs.index'));
});

// Staff > Create Staff
Breadcrumbs::register('staffs.create', function($breadcrumbs)
{
    $breadcrumbs->parent('staffs.index');
    $breadcrumbs->push('Create', route('staffs.create'));
});

// Staff > [ID]
Breadcrumbs::register('staffs.show', function($breadcrumbs, $staffs)
{
    $breadcrumbs->parent('staffs.index');
    $breadcrumbs->push($staffs->id, route('staffs.show', $staffs->id));
});

// Staff > [ID] > Edit Staff
Breadcrumbs::register('staffs.edit', function($breadcrumbs, $staffs)
{
    $breadcrumbs->parent('staffs.show', $staffs);
    $breadcrumbs->push('Edit', route('staffs.edit', $staffs->id));
});

// Inventory RESTFUL Breadcrumb
// Index
Breadcrumbs::register('inventory.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Inventory', route('inventory.index'));
});

// Inventory > Create Inventory
Breadcrumbs::register('inventory.create', function($breadcrumbs)
{
    $breadcrumbs->parent('inventory.index');
    $breadcrumbs->push('Create', route('inventory.create'));
});

// Inventory > [ID]
Breadcrumbs::register('inventory.show', function($breadcrumbs, $inventory)
{
    $breadcrumbs->parent('inventory.index');
    $breadcrumbs->push($inventory->id, route('inventory.show', $inventory->id));
});

// Inventory > [ID] > Edit Inventory
Breadcrumbs::register('inventory.edit', function($breadcrumbs, $inventory)
{
    $breadcrumbs->parent('inventory.show', $inventory);
    $breadcrumbs->push('Edit', route('inventory.edit', $inventory->id));
});

// Category RESTFUL Breadcrumb
// Index
Breadcrumbs::register('category.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Category', route('category.index'));
});

// Category > Create Category
Breadcrumbs::register('category.create', function($breadcrumbs)
{
    $breadcrumbs->parent('category.index');
    $breadcrumbs->push('Create', route('category.create'));
});

// Category > [ID]
Breadcrumbs::register('category.show', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('category.index');
    $breadcrumbs->push($category->id, route('category.show', $category->id));
});

// Category > [ID] > Edit Category
Breadcrumbs::register('category.edit', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('category.show', $category);
    $breadcrumbs->push('Edit', route('category.edit', $category->id));
});

// Asset RESTFUL Breadcrumb
// Index
Breadcrumbs::register('asset.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Asset', route('asset.index'));
});

// Asset > Create Asset
Breadcrumbs::register('asset.create', function($breadcrumbs)
{
    $breadcrumbs->parent('asset.index');
    $breadcrumbs->push('Create', route('asset.create'));
});

// Asset > [ID]
Breadcrumbs::register('asset.show', function($breadcrumbs, $asset)
{
    $breadcrumbs->parent('asset.index');
    $breadcrumbs->push($asset->id, route('asset.show', $asset->id));
});

// Asset > [ID] > Edit Asset
Breadcrumbs::register('asset.edit', function($breadcrumbs, $asset)
{
    $breadcrumbs->parent('asset.show', $asset);
    $breadcrumbs->push('Edit', route('asset.edit', $asset->id));
});


// Bank RESTFUL Breadcrumb

// Index
Breadcrumbs::register('bank.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Bank', route('bank.index'));
});

// Bank > Create Bank
Breadcrumbs::register('bank.create', function($breadcrumbs)
{
    $breadcrumbs->parent('bank.index');
    $breadcrumbs->push('Create', route('bank.create'));
});

// Bank > [ID]
Breadcrumbs::register('bank.show', function($breadcrumbs, $bank)
{
    $breadcrumbs->parent('bank.index');
    $breadcrumbs->push($bank->id, route('staffs.show', $bank->id));
});

// Bank > [ID] > Edit Bank
Breadcrumbs::register('bank.edit', function($breadcrumbs, $bank)
{
    $breadcrumbs->parent('bank.show', $bank);
    $breadcrumbs->push('Edit', route('bank.edit', $bank->id));
});

// Accounting

// Deposit RESTFUL Breadcrumb

// Index
Breadcrumbs::register('deposit.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Deposit', route('deposit.index'));
});

// Deposit > Create Deposit
Breadcrumbs::register('deposit.create', function($breadcrumbs)
{
    $breadcrumbs->parent('deposit.index');
    $breadcrumbs->push('Add', route('deposit.create'));
});

// Deposit > [ID] > Edit Deposit
Breadcrumbs::register('deposit.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('deposit.index');
    $breadcrumbs->push('Edit', route('deposit.edit', $list->id));
});

// Expense RESTFUL Breadcrumb

// Index
Breadcrumbs::register('expense.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Expense', route('expense.index'));
});

// Expense > Create Expense
Breadcrumbs::register('expense.create', function($breadcrumbs)
{
    $breadcrumbs->parent('expense.index');
    $breadcrumbs->push('Add', route('expense.create'));
});

// Expense > [ID] > Edit Expense
Breadcrumbs::register('expense.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('expense.index');
    $breadcrumbs->push('Edit', route('expense.edit', $list->id));
});

// Transfer RESTFUL Breadcrumb

// Index
Breadcrumbs::register('transfer.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Transfer', route('transfer.index'));
});

// Transfer > Create Transfer
Breadcrumbs::register('transfer.create', function($breadcrumbs)
{
    $breadcrumbs->parent('transfer.index');
    $breadcrumbs->push('Initiate', route('transfer.create'));
});

// Transfer > [ID] > Edit Transfer
Breadcrumbs::register('transfer.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('transfer.index');
    $breadcrumbs->push('Edit', route('transfer.edit', $list->id));
});


// Product RESTFUL Breadcrumb

// Index
Breadcrumbs::register('product.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Product', route('product.index'));
});

// Product > Create Product
Breadcrumbs::register('product.create', function($breadcrumbs)
{
    $breadcrumbs->parent('product.index');
    $breadcrumbs->push('Create', route('product.create'));
});

// Product > [ID] > Edit Product
Breadcrumbs::register('product.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('product.index');
    $breadcrumbs->push('Edit', route('product.edit', $list->id));
});


// Service RESTFUL Breadcrumb
// Index
Breadcrumbs::register('service.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Service', route('service.index'));
});

// Service > Create Service
Breadcrumbs::register('service.create', function($breadcrumbs)
{
    $breadcrumbs->parent('service.index');
    $breadcrumbs->push('Create', route('service.create'));
});

// Service > [ID] > Edit Service
Breadcrumbs::register('service.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('service.index');
    $breadcrumbs->push('Edit', route('service.edit', $list->id));
});


// Bankncash RESTFUL Breadcrumb
// Index
Breadcrumbs::register('bankncash.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Bank Account', route('bankncash.index'));
});

// Bank Account > Create Bank Account
Breadcrumbs::register('bankncash.create', function($breadcrumbs)
{
    $breadcrumbs->parent('bankncash.index');
    $breadcrumbs->push('Add', route('bankncash.create'));
});

// Bank Account > [ID] > Edit Bank Account
Breadcrumbs::register('bankncash.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('bankncash.index');
    $breadcrumbs->push('Edit', route('bankncash.edit', $list->id));
});

// Tax RESTFUL Breadcrumb
// Index
Breadcrumbs::register('tax.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tax', route('tax.index'));
});

// Tax > Create Tax
Breadcrumbs::register('tax.create', function($breadcrumbs)
{
    $breadcrumbs->parent('tax.index');
    $breadcrumbs->push('Add', route('tax.create'));
});

// Tax > [ID] > Edit Tax
Breadcrumbs::register('tax.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('tax.index');
    $breadcrumbs->push('Edit', route('tax.edit', $list->id));
});

// Contact RESTFUL Breadcrumb
// Index
Breadcrumbs::register('crm.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('crm.index'));
});

// Contact > Create Contact
Breadcrumbs::register('crm.create', function($breadcrumbs)
{
    $breadcrumbs->parent('crm.index');
    $breadcrumbs->push('Add', route('crm.create'));
});

// Contact > [ID] > Edit Contact
Breadcrumbs::register('crm.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('crm.index');
    $breadcrumbs->push('Edit', route('crm.edit', $list->id));
});

// Quote RESTFUL Breadcrumb
// Index
Breadcrumbs::register('quote.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Quote', route('quote.index'));
});

// Quote > Create Quote
Breadcrumbs::register('quote.create', function($breadcrumbs)
{
    $breadcrumbs->parent('quote.index');
    $breadcrumbs->push('Add', route('quote.create'));
});

// Quote > [ID] > Edit Quote
Breadcrumbs::register('quote.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('quote.index');
    $breadcrumbs->push('Edit', route('quote.edit', $list->id));
});

// Invoice RESTFUL Breadcrumb
// Index
Breadcrumbs::register('invoice.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Invoice', route('invoice.index'));
});

// Invoice > Create Invoice
Breadcrumbs::register('invoice.create', function($breadcrumbs)
{
    $breadcrumbs->parent('invoice.index');
    $breadcrumbs->push('Add', route('invoice.create'));
});

// Invoice > [ID] > Edit Invoice
Breadcrumbs::register('invoice.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('invoice.index');
    $breadcrumbs->push('Edit', route('invoice.edit', $list->id));
});

// RecurringInvoice RESTFUL Breadcrumb
// Index
Breadcrumbs::register('rinvoice.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Recurring Invoice', route('rinvoice.index'));
});

// RecurringInvoice > Create RecurringInvoice
Breadcrumbs::register('rinvoice.create', function($breadcrumbs)
{
    $breadcrumbs->parent('rinvoice.index');
    $breadcrumbs->push('Add', route('rinvoice.create'));
});

// RecurringInvoice > [ID] > Edit RecurringInvoice
Breadcrumbs::register('rinvoice.edit', function($breadcrumbs, $list)
{
    $breadcrumbs->parent('rinvoice.index');
    $breadcrumbs->push('Edit', route('rinvoice.edit', $list->id));
});


// Transaction Breadcrumb
// Index
Breadcrumbs::register('viewtransaction', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Transaction', route('viewtransaction'));
});

// Activity Breadcrumb
// Index
Breadcrumbs::register('activity', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Activity', route('activity'));
});

// Account Statement Breadcrumb
// Index
Breadcrumbs::register('accstatement', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Account Statement', route('accstatement'));
});

// Income vs Expense Breadcrumb
// Index
Breadcrumbs::register('incomeexpense', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Income vs Expense', route('incomeexpense'));
});

// All Income Breadcrumb
// Index
Breadcrumbs::register('allincome', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('All Income', route('allincome'));
});

// All Expense Breadcrumb
// Index
Breadcrumbs::register('allexpense', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('All Expense', route('allexpense'));
});

// Income Report Breadcrumb
// Index
Breadcrumbs::register('incomereport', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Income Report', route('incomereport'));
});

// Expense Report Breadcrumb
// Index
Breadcrumbs::register('expensereport', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Expense Report', route('expensereport'));
});

// Account Balance Breadcrumb
// Index
Breadcrumbs::register('accbal', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Account Balance', route('accbal'));
});

// Account Statement Breadcrumb
// Index
Breadcrumbs::register('accstatement', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Account Statement', route('accstatement'));
});

// Account Statement Breadcrumb
// Index
Breadcrumbs::register('reportsbydate', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Datewise Reports', route('reportsbydate'));
});
