<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Syscats extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_cats')->insert([
            'name'          => 'Advertising',
            'type'          => 'Expense',
            'sorder'        => '1',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Bank and Credit Card Interest',
            'type'          => 'Expense',
            'sorder'        => '23',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Car and Truck',
            'type'          => 'Expense',
            'sorder'        => '24',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Commissions and Fees',
            'type'          => 'Expense',
            'sorder'        => '25',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Contract Labor',
            'type'          => 'Expense',
            'sorder'        => '26',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Contributions',
            'type'          => 'Expense',
            'sorder'        => '27',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Cost of Goods Sold',
            'type'          => 'Expense',
            'sorder'        => '28',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Credit Card Interest',
            'type'          => 'Expense',
            'sorder'        => '29',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Depreciation',
            'type'          => 'Expense',
            'sorder'        => '31',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Dividend Payments',
            'type'          => 'Expense',
            'sorder'        => '32',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Employee Benefit Programs',
            'type'          => 'Expense',
            'sorder'        => '33',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Entertainment',
            'type'          => 'Expense',
            'sorder'        => '34',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Gift',
            'type'          => 'Expense',
            'sorder'        => '35',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Insurance',
            'type'          => 'Expense',
            'sorder'        => '36',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Legal, Accountant &amp; Other Professional Services',
            'type'          => 'Expense',
            'sorder'        => '37',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Meals',
            'type'          => 'Expense',
            'sorder'        => '38',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Mortgage Interest',
            'type'          => 'Expense',
            'sorder'        => '39',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Non-Deductible Expense',
            'type'          => 'Expense',
            'sorder'        => '40',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Other Business Property Leasing',
            'type'          => 'Expense',
            'sorder'        => '22',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Owner Draws',
            'type'          => 'Expense',
            'sorder'        => '21',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Payroll Taxes',
            'type'          => 'Expense',
            'sorder'        => '8',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Phone',
            'type'          => 'Expense',
            'sorder'        => '9',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Postage',
            'type'          => 'Expense',
            'sorder'        => '10',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Rent',
            'type'          => 'Expense',
            'sorder'        => '12',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Repairs &amp; Maintenance',
            'type'          => 'Expense',
            'sorder'        => '11',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Supplies',
            'type'          => 'Expense',
            'sorder'        => '13',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Taxes and Licenses',
            'type'          => 'Expense',
            'sorder'        => '14',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Transfer Funds',
            'type'          => 'Expense',
            'sorder'        => '15',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Travel',
            'type'          => 'Expense',
            'sorder'        => '16',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Utilities',
            'type'          => 'Expense',
            'sorder'        => '17',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Vehicle, Machinery &amp; Equipment Rental or Leasing',
            'type'          => 'Expense',
            'sorder'        => '18',
        ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Wages',
            'type'          => 'Expense',
            'sorder'        => '19',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Regular Income',
            'type'          => 'Income',
            'sorder'        => '1',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Owner Contribution',
            'type'          => 'Income',
            'sorder'        => '12',
         ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Interest Income',
            'type'          => 'Income',
            'sorder'        => '11',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Expense Refund',
            'type'          => 'Income',
            'sorder'        => '10',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Other Income',
            'type'          => 'Income',
            'sorder'        => '9',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Salary',
            'type'          => 'Income',
            'sorder'        => '8',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Equities',
            'type'          => 'Income',
            'sorder'        => '7',
        ]);

        DB::table('sys_cats')->insert([
            'name'          => 'Rent &amp; Royalties',
            'type'          => 'Income',
            'sorder'        => '6',
        ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Home equity',
            'type'          => 'Income',
            'sorder'        => '5',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Part Time Work',
            'type'          => 'Income',
            'sorder'        => '3',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Account Transfer',
            'type'          => 'Income',
            'sorder'        => '4',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Health Care',
            'type'          => 'Income',
            'sorder'        => '20',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Loans',
            'type'          => 'Income',
            'sorder'        => '30',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Selling Software',
            'type'          => 'Income',
            'sorder'        => '2',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Software Customization',
            'type'          => 'Income',
            'sorder'        => '13',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'FLMCS',
            'type'          => 'Income',
            'sorder'        => '0',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'SMS',
            'type'          => 'Income',
            'sorder'        => '0',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Salary',
            'type'          => 'Expense',
            'sorder'        => '7',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Paypal',
            'type'          => 'Expense',
            'sorder'        => '6',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Office Equipment',
            'type'          => 'Expense',
            'sorder'        => '5',
         ]);

         DB::table('sys_cats')->insert([
            'name'          => 'Staff Entertaining',
            'type'          => 'Expense',
            'sorder'        => '3',
         ]);

    }
}
