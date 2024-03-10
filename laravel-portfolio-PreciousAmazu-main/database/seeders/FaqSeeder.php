<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //FAQ 1
        DB::table('faqs')->insert([
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => 'Visit the HZ print page, log in and then upload files you want to print. After choosing files you can select additional settings and confirm your print request. Next, you go to the printer they are on each floor, scan your card in it, choose printing option and your documents are printed.',
            'link' => 'https://print.hz.nl/login.cfm?dest=index.cfm&'
        ]);

        //FAQ 2
        DB::table('faqs')->insert([
            'question' => 'How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'Scanning to a private/external mailbox is not possible. Please do not change the scanner setting please!Although scanning is free, you must have at least €0.07 credit on your HZ card.For more instructions visit',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8a56d47dcbd0ffb9cdf78f20b&origin=searchPreview'
        ]);

        //FAQ 3
        DB::table('faqs')->insert([
            'question' => 'How can I buy something (like when I sign up for the IT introduction event at Friday 16/09) on the HZ web shop?',
            'answer' => 'You enter the HZ webshop page and after it you need to log in. After authenticating you are able to choose and thus purchase tickets or enrol in for some events',
            'link' => 'https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097'
        ]);

        //FAQ 4
        DB::table('faqs')->insert([
            'question' => 'Where can I find the latest instructions on what to do when you are sick / show symptoms of COVID?',
            'answer' => 'Find Covid instructions on',
            'link' => 'https://hz.nl/en/current-affairs/coronavirus'
        ]);

        //FAQ 5
        DB::table('faqs')->insert([
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => 'You can book it via self service portal Make a reservation, next reserve meeting room or Project Group room then Reserve a room
                      and then you can take an available time and approve it.',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/'
        ]);

        //FAQ 6
        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'You need to show your HZ pass at the barriers so as to get into the HZ parking lot and park.',
        ]);
    }
}
