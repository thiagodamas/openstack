<?php

namespace spec\OpenStack\Compute\v2;

class Fixtures
{
    public static function getServers()
    {
        return <<<EOT
{
    "servers": [
        {
            "id": "616fb98f-46ca-475e-917e-2563e5a8cd19",
            "links": [
                {
                    "href": "http://openstack.example.com/v2/openstack/servers/616fb98f-46ca-475e-917e-2563e5a8cd19",
                    "rel": "self"
                },
                {
                    "href": "http://openstack.example.com/openstack/servers/616fb98f-46ca-475e-917e-2563e5a8cd19",
                    "rel": "bookmark"
                }
            ],
            "name": "new-server-test"
        }
    ]
}
EOT;
    }
} 