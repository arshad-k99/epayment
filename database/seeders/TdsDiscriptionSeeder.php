<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TdsDiscription;


class TdsDiscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
            ['Payment to Govt. Employees other than Union Government Employees', '192', '92A'],
            ['Payment of Employees other than Govt. Employees', '192', '92B'],
            ['Interest on securities', '193', '193'],
            ['Dividend', '194', '194'],
            ['Interest other than interest on securities', '194', '94A'],
            ['Winnings from lotteries and crossword puzzles', '194B', '94B'],
            ['Winnings from horse race', '194BB', '4BB'],
            ['Payment in respect of Life Insurance Policy', '194DA', '4DA'],
            ['Payment of Compensation on Acquisition of Certain Immovable Property', '194LA', '4LA'],
            ['Income by way of Interest from Infrastructure debt fund payable to a Non-Resident', '194LB', '4LB'],
            ['Income by way of Interest from Indian Company', '194LC', '4LC'],
            ['Income by way of interest on certain bonds and Government securities', '194LD', '4LD'],
            ['Payment of contractors and sub-contractors', '194C', '94C'],
            ['Insurance Commission', '194D', '94D'],
            ['Payments to non-resident Sportsmen/Sport Associations', '194E', '94E'],
            ['Payments in respect of Deposits under National Savings Schemes', '194EE', '4EE'],
            ['Payments on account of Re-purchase of Units by Mutual Funds or UTI', '194F', '94F'],
            ['Commission, prize etc., on sale of Lottery tickets', '194G', '94G'],
            ['Commission or Brokerage', '194H', '94H'],
            ['Rent', '194I', '94I'],
            ['Payment under Specified Agreement', '194IC', '4IC'],
            ['Fees for Professional or Technical Services', '194J', '94J'],
            ['Certain income from units of a business trust', '194LBA', 'LBA'],
            ['Income in respect of Units of Investment Fund', '194LBB', 'LBB'],
            ['Income in respect of Investment in Securitization Trust', '194LBC', 'LBC'],
            ['Payment of certain sums by e-commerce operator to e-commerce participant', '194O', '94O'],
            ['Other sums', '195', '195'],
            ['Income in respect of units of Non-Residents', '196A', '96A'],
            ['Collection at source from Alcoholic Liquor for Human Consumption', '206C', '6CA'],
            ['Collection at source from Timber obtained under Forest lease', '206C', '6CB'],
            ['Collection at source from Timber obtained by any Mode other than a Forest Lease', '206C', '6CC'],
            ['Collection at source from any other Forest Produce (not being timber or tendu leaves)', '206C', '6CD'],
            ['Collection at source from Scrap', '206C', '6CE'],
            ['Collection at source from contractors or licensee or lease relating to Parking lots', '206C', '6CF'],
            ['Collection at source from contractors or licensee or lease relating to toll plaza', '206C', '6CG'],
            ['Collection at source from contractors or licensee or lease relating to mining or quarrying', '206C', '6CH'],
            ['Collection at source from tendu leaves', '206C', '6CI'],
            ['Minerals', '206C', '6CJ'],
            ['Bullion and Jewellery', '206C', '6CK'],
            ['Payment of accumulated balance due to an employee', '192', '2AA'],
            ['TCS on sale of Motor Vehicle', '206C', '6CL'],
            ['TCS on sale in cash of any goods (other than bullion/jewellery)', '206C', '6CM'],
            ['TCS on providing of any services (other than Ch-XVII-B)', '206C', '6CN'],
            ['TCS on Foreign Remittance', '206C', '6CO'],
            ['Income payable to a resident assessee in respect of Units of a specified Mutual Fund specified u/s 10(23D) or units from the Administrator of the specified undertaking or units from specified company', '194K', '94K'],
            ['Payments in respect of Units to an Offshore Fund', '196B', '96B'],
            ['Income from foreign Currency Bonds or shares of Indian Company', '196C', '96C'],
            ['Income of foreign institutional investors from securities', '196D', '96D'],
            ['Payment for transfer of virtual digital asset where payment is in kind or in exchange of another virtual digital asset and tax required to be deducted is paid before such payment is released', '194S-P', '4SP'],
            ['Deduction of tax in case of specified senior citizens', '194P', '94P'],
            ['Deduction of tax at source on payment of certain sum for the purchase of goods', '194Q', '94Q'],
            ['Income of specified fund from securities referred to in clause (a) of sub-section (1) of section 115AD (other than interest income referred to in section 194LD)', '196D(1A)', '6DA'],
            ['Remittance under LRS for educational loan taken from a financial institution mentioned in Section 80E', '206C', '6CP'],
            ['TCS on the sale of goods', '206C', '6CR'],
            ['Deduction of tax on benefit or perquisite in respect of business or profession', '194R', '94R'],
            ['Payment on transfer of virtual digital asset', '194S', '94S'],
            ['Winnings from lotteries and crossword puzzles where consideration is made in kind or cash is not sufficient to meet the tax liability and tax has been paid before such winnings are released', '194B-P', '4BP'],
            ['Benefits or perquisites of business or profession where such benefit is provided in kind or where part in cash is not sufficient to meet the tax liability and tax required to be deducted is paid before such benefit is released', '194R-P', '4RP'],
        ];

        foreach ($data as $value) {

            TdsDiscription::create([
                'Description' => $value[0],
                'Section' => $value[1],
                'Code' => $value[2],
            ]);
        }
    }
}
