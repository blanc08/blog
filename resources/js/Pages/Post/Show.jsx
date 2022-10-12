import React from "react";
import Guest from "@/Layouts/GuestLayout";
import parse from "html-react-parser";
import { Link, Head } from "@inertiajs/inertia-react";

export default function Show({ post }) {
    console.log(post);
    return (
        <Guest>
            <h2 className="text-2xl text-italic mb-5">
                {post.title}
                {/* <small className="text-sm">- {post.category.name}</small> */}
            </h2>

            <article className="container mx-auto">{parse(post.body)}</article>
        </Guest>
    );
}
