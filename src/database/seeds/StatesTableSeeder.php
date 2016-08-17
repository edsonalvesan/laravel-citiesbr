<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('states')->insert(['id'=>'12','initials'=>'AC', 'state'=>'Acre']);
		DB::table('states')->insert(['id'=>'27','initials'=>'AL', 'state'=>'Alagoas']);
		DB::table('states')->insert(['id'=>'16','initials'=>'AP', 'state'=>'Amapá']);
		DB::table('states')->insert(['id'=>'13','initials'=>'AM', 'state'=>'Amazonas']);
		DB::table('states')->insert(['id'=>'29','initials'=>'BA', 'state'=>'Bahia']);
		DB::table('states')->insert(['id'=>'23','initials'=>'CE', 'state'=>'Ceará']);
		DB::table('states')->insert(['id'=>'53','initials'=>'DF', 'state'=>'Distrito Federal']);
		DB::table('states')->insert(['id'=>'32','initials'=>'ES', 'state'=>'Espírito Santo']);
		DB::table('states')->insert(['id'=>'52','initials'=>'GO', 'state'=>'Goiás']);
		DB::table('states')->insert(['id'=>'21','initials'=>'MA', 'state'=>'Maranhão']);
		DB::table('states')->insert(['id'=>'51','initials'=>'MT', 'state'=>'Mato Grosso']);
		DB::table('states')->insert(['id'=>'50','initials'=>'MS', 'state'=>'Mato Grosso do Sul']);
		DB::table('states')->insert(['id'=>'31','initials'=>'MG', 'state'=>'Minas Gerais']);
		DB::table('states')->insert(['id'=>'15','initials'=>'PA', 'state'=>'Pará']);
		DB::table('states')->insert(['id'=>'25','initials'=>'PB', 'state'=>'Paraíba']);
		DB::table('states')->insert(['id'=>'41','initials'=>'PR', 'state'=>'Paraná']);
		DB::table('states')->insert(['id'=>'26','initials'=>'PE', 'state'=>'Pernambuco']);
		DB::table('states')->insert(['id'=>'22','initials'=>'PI', 'state'=>'Piauí']);
		DB::table('states')->insert(['id'=>'33','initials'=>'RJ', 'state'=>'Rio de Janeiro']);
		DB::table('states')->insert(['id'=>'24','initials'=>'RN', 'state'=>'Rio Grande do Norte']);
		DB::table('states')->insert(['id'=>'43','initials'=>'RS', 'state'=>'Rio Grande do Sul']);
		DB::table('states')->insert(['id'=>'11','initials'=>'RO', 'state'=>'Rondônia']);
		DB::table('states')->insert(['id'=>'14','initials'=>'RR', 'state'=>'Roraima']);
		DB::table('states')->insert(['id'=>'42','initials'=>'SC', 'state'=>'Santa Catarina']);
		DB::table('states')->insert(['id'=>'35','initials'=>'SP', 'state'=>'São Paulo']);
		DB::table('states')->insert(['id'=>'28','initials'=>'SE', 'state'=>'Sergipe']);
		DB::table('states')->insert(['id'=>'17','initials'=>'TO', 'state'=>'Tocantins']);
    }
}
