import React from "react";
import Guest from "@/Layouts/GuestLayout";
import { Link, Head } from "@inertiajs/inertia-react";

export default function Index(props) {
    return (
        <Guest>
            <Head title="Welcome" />
            <p>Contributions</p>
        </Guest>
    );
}
