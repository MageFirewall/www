 <h1> Scanning your store from Magefirewall.com </h1>
<?php
$get_url = $_GET['url'];
if(!empty($get_url)) {    

    
    $urlparts = parse_url($get_url);
    
    $domain = $urlparts['host'];
    $domain_port = @$urlparts['port']?$urlparts['port']:80;
    
    //list of port numbers to scan
    $ports = array(21, 22, 23, 25, 53, $domain_port, 110,143,443, 1433, 3306);
    
    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($domain, $port, $err, $err_string, 1)) {
            $results[$port] = true;
            fclose($pf);
        } else {
            $results[$port] = false;
        }
    }
 
    foreach($results as $port=>$val)    {
        $prot = getservbyport($port,"tcp");
                echo "Port $port ($prot): ";
        if($val) {
            echo "<span style=\"color:green\">Accessible</span><br/>";
            if ($port == '21')
            {
             	echo "Consider closing the FTP Port and use SCP / SFTP or a Revision system like GIT to manage code updates <br />";
            }
            elseif($port == '22')
            {
            	echo "Consider changing your default SSH port from 22. <br />";
            }
        	elseif($port == '3306')
            {
            	echo "Your Mysql server is available on the internet so please consider restricting access to this port or make it internal <br />";
            }
        	elseif($port == '1433')
            {
            	echo "Your MSSQL server is available on the internet so please consider restricting access to this port or make it internal <br />";
            }
        	elseif($port == '25')
            {
            	echo "You seem to be running SMTP service on your webserver this is generally bad idea. Consider a service like Mailgun/Mandrill <br />";
            }
        	elseif($port == $domain_port)
            {
            	echo "This is fine / required if your site is public. <br />";
            }
        	elseif($port == 110 ||$port == 143 )
            {
            	echo "Consider seperating your Email & Web Services into its own servers<br />";
            }
        }
        else {
            echo "<span style=\"color:red\">Inaccessible / Closed</span><br/>";
        }
    }
}

?><br />
<br />
Please talk to your webhost / server administrator to address these concerns

If you see MANY of the ports open here apart from 80/443 you must be hosted on an shared hosting

Consider using Magento on a Dedicated/ VM or Cloud Hosting. 

<h3> We at MageFirewall also help with following features. </h3>

*Speedify your Magento <br />
*Upgrade your Magento <br />
*Apply security patches. <br />
*Update / Fix your server <br />
*Migrate your Magento <br />
 <br />
<h3>Please contact us at http://magefirewall.com or Tweet us at @MageFirewall </h3>