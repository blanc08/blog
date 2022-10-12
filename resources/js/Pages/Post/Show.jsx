import React from "react";
import Guest from "@/Layouts/GuestLayout";
import parse from "html-react-parser";
import { Head } from "@inertiajs/inertia-react";

export default function Show({ post, title }) {
    return (
        <Guest>
            <Head title={title} />
            <h2 className="text-2xl text-italic mb-5">
                {post.title}
                {post.category ? (
                    <small className="text-sm">- {post.category.name}</small>
                ) : null}
            </h2>

            <article className="container mx-auto">{parse(post.body)}</article>
        </Guest>
    );
}
