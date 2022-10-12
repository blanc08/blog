import React from "react";
import Guest from "@/Layouts/GuestLayout";
import { Link, Head } from "@inertiajs/inertia-react";

export default function Index(props) {
    console.log(props.posts);

    if (props.posts.length === 0) {
        return (
            <Guest>
                <Head title="Posts" />
                No posts found on database
            </Guest>
        );
    }

    return (
        <Guest>
            <Head title="Posts" />
            {props.posts.map((post) => {
                return (
                    <article
                        key={post.id}
                        className="mb-5 md:w-2/6 rounded-md p-3"
                    >
                        <a className="p-0" href={`/posts/${post.slug}`}>
                            <h6 className="text-lg text-italic mb-2">
                                {post.title}
                            </h6>
                            {post.thumbnail ? (
                                <img
                                    className="mb-3"
                                    src={`/images/${post.thumbnail}`}
                                    alt={post.title}
                                />
                            ) : null}
                            <p className="text-sm">{post.excerpt}</p>
                            <span
                                className="text-sm"
                                href={`/posts/${post.slug}`}
                            >
                                Baca selengkapnya
                            </span>
                        </a>
                    </article>
                );
            })}
        </Guest>
    );
}
