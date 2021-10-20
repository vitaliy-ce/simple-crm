<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public function getSftpStr()
    {
        $sftp_str = '';
        
        if (!empty($this->ssh_login) && !empty($this->ssh_pass) && !empty($this->ssh_host)) {

            $sftp_str = 'sftp://'.$this->ssh_login.':'.$this->ssh_pass.'@'.$this->ssh_host;
        }

        return $sftp_str;
    }

    public function getFtpStr()
    {
        $sftp_str = '';
        
        if (!empty($this->ssh_login) && !empty($this->ssh_pass) && !empty($this->ssh_host)) {

            $sftp_str = 'ftp://'.$this->ssh_login.':'.$this->ssh_pass.'@'.$this->ssh_host;
        }

        return $sftp_str;
    }

    public function getSshStr()
    {
        $sftp_str = '';
        
        if (!empty($this->ssh_login) && !empty($this->ssh_host)) {

            $sftp_str = 'ssh '.$this->ssh_login.'@'.$this->ssh_host;
        }

        return $sftp_str;
    }
}
