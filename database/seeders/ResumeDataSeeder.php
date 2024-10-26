<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResumeData;

class ResumeDataSeeder extends Seeder
{
    public function run()
    {
        ResumeData::create([
            'email' => 'genesisnavales0604@gmail.com',
            'phone' => '09761268685',
            'summary' => 'I.T Student pursuing his career.',
            'experience' => 'Photographer - Freelance, Virtual Graphics Designer - Freelance',
            'education' => 'Undergraduate - Baliwag Polytechnic College',
            'skills' => 'Knowledgeable in Microsoft Office, Known some coding languages',
        ]);
    }
}
