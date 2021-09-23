<?php

namespace Database\Factories;

use App\Models\Site;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Site::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'domain'        => $this->faker->unique()->domainName(),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),

            'hosting_host'  => $this->faker->domainName(),
            'hosting_login' => $this->faker->userName(),
            'hosting_pass'  => $this->faker->password(),

            'ssh_host'      => $this->faker->domainName(),
            'ssh_login'     => $this->faker->userName(),
            'ssh_pass'      => $this->faker->password(),

            'ftp_host'      => $this->faker->domainName(),
            'ftp_login'     => $this->faker->userName(),
            'ftp_pass'      => $this->faker->password(),
            
            'db_host'       => $this->faker->domainName(),
            'db_login'      => $this->faker->userName(),
            'db_pass'       => $this->faker->password(),
            
            'admin_host'    => $this->faker->domainName(),
            'admin_login'   => $this->faker->userName(),
            'admin_pass'    => $this->faker->password(),
        ];
    }
}
