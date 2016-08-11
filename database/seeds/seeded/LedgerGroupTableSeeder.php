<?php

use App\Models\LedgerGroup;
use Illuminate\Database\Seeder;

class LedgerGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ledger_groups')->truncate();

        LedgerGroup::create([
            'name'   => 'Current Assets',
        ]);

        LedgerGroup::create([
            'name'   => 'Indirect Expenses'
        ]);

        LedgerGroup::create([
            'name'   => 'Current Liabilities',
        ]);

        LedgerGroup::create([
            'name'   => 'Fixed Assets',
        ]);

        LedgerGroup::create([
            'name'   => 'Direct Incomes',
        ]);

        LedgerGroup::create([
            'name'   => 'Bank Account',
        ]);

        LedgerGroup::create([
            'name'   => 'Loans & Liabilities',
        ]);

        LedgerGroup::create([
            'name'   => 'Bank OD',
        ]);

        LedgerGroup::create([
            'name'   => 'Branch & Division',
        ]);

        LedgerGroup::create([
            'name'   => 'Capital Account',
        ]);

        LedgerGroup::create([
            'name'   => 'Indirect Incomes',
        ]);

        LedgerGroup::create([
            'name'   => 'Direct Expenses',
        ]);

        LedgerGroup::create([
            'name'   => 'Cash in Hand',
        ]);

        LedgerGroup::create([
            'name'   => 'Stock in Hand',
        ]);

        LedgerGroup::create([
            'name'   => 'Sundry Creditors',
        ]);

        LedgerGroup::create([
            'name'   => 'Sundry Debtors',
        ]);

        LedgerGroup::create([
            'name'   => 'Suspense Account',
        ]);

        LedgerGroup::create([
            'name'   => 'Sales Account',
        ]);

        LedgerGroup::create([
            'name'   => 'Duties & Taxes',
        ]);

        LedgerGroup::create([
            'name'   => 'Investment',
        ]);

        LedgerGroup::create([
            'name'   => 'Loans & Liabilities',
        ]);

        LedgerGroup::create([
            'name'   => 'Purchase Account',
        ]);

    }
}
