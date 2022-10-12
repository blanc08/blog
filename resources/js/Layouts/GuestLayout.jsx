import React from "react";
import ApplicationLogo from "@/Components/ApplicationLogo";
import { Link } from "@inertiajs/inertia-react";

export default function Guest({ children }) {
    function switchTheme() {
        feather.replace();

        //Toggle mode
        const toggle = document.querySelector(".js-change-theme");
        const body = document.querySelector("body");
        // const content = document.querySelector(".bg-gray-800");
        //const profile = document.getElementById('profile');

        toggle.addEventListener("click", () => {
            if (body.classList.contains("text-gray-700")) {
                toggle.innerHTML = "☀️";
                // body.classList.remove("text-gray-700");
                // body.classList.add("text-gray-300");
                // body.classList.remove("bg-gray-100");
                // body.classList.add("bg-gray-900");

                // Content list
                // content.classList.remove("bg-gray-200");
                // content.classList.add("bg-gray-800");
            } else {
                toggle.innerHTML = "🌙";
                // body.classList.remove("text-gray-300");
                // body.classList.add("text-gray-700");
                // body.classList.remove("bg-gray-900");
                // body.classList.add("bg-gray-100");

                // Content list
                // content.classList.remove("bg-gray-800");
                // content.classList.add("bg-gray-200");
            }
        });
    }

    return (
        <div className="bg-gray-900 text-gray-300 font-sans quicksand min-h-screen">
            {/* {{-- Main --}} */}
            <main className="flex flex-wrap p-2 md:p-8">
                {/* {{-- intro --}} */}
                <div className="w-full md:w-3/12 lg:w-3/12 md:pr-10 order-1 md:order-1">
                    <div className="max-w-md md:float-right md:text-right leading-loose tracking-tight md:sticky md:top-0 ">
                        <p className="font-bold my-2 md:my-4">
                            <a className="bg-transparent" href="/">
                                Bagus Oktaviadi
                            </a>
                        </p>

                        <ul className="flex flex-wrap justify-between flex-col">
                            <li className="underline">Junior Programmer</li>
                            <li>
                                <a href="/contributions" className="nav">
                                    Contributions
                                </a>
                            </li>
                            <li>
                                <a href="/posts" className="nav">
                                    Blogs
                                </a>
                            </li>
                        </ul>

                        <a
                            href="/about"
                            className="normal font-bold hover:font-bold"
                        >
                            more about me...
                        </a>
                    </div>
                </div>
                {/* {{-- content --}} */}
                <div className="w-full md:w-9/12 lg:w-9/12 order-2 md:order-2">
                    <div className="sm:pr-4 leading-loose tracking-tight pt-4">
                        {children}
                    </div>
                </div>
                {/* {{-- Contact --}} */}
                <div className="w-full md:w-3/12 lg:w-3/12 md:pr-10 pt-12 md:pt-0 md:sticky md:bottom-0 order-4 md:order-3">
                    <div className="max-w-md md:float-right md:text-right leading-loose tracking-tight md:mb-16">
                        <p className="font-bold my-4 md:my-6">Contact Me</p>

                        <ul className="flex flex-wrap justify-between flex-row md:flex-col">
                            <li>
                                <a
                                    href="mailto:bagusoktaviadi1@gmail.com"
                                    className="nav mx-2 md:mx-0"
                                >
                                    Email
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://twitter.com/succiduous08"
                                    target="_blank"
                                    className="nav mx-2 md:mx-0"
                                >
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a
                                    href="https://instagram.com/blanc.08"
                                    target="_blank"
                                    className="nav mx-2 md:mx-0"
                                >
                                    Instagram
                                </a>
                            </li>
                            <li>
                                <a href="#" className="nav mx-2 md:mx-0">
                                    etc
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                {/* {{-- Footer --}} */}
                <div className="w-full md:w-9/12 lg:w-9/12 order-3 md:order-4">
                    <div className="max-w-md leading-loose tracking-tight">
                        <p className="font-bold my-4 md:my-12">
                            Made use Laravel 8.0.0
                            <i
                                className="inline ml-3"
                                data-feather="activity"
                            ></i>
                        </p>
                        <p>
                            Ui is Inspired by{" "}
                            <a href="https://github.com/tailwindtoolbox">
                                tailwindtoolbox
                            </a>{" "}
                            & diomed
                        </p>
                        <p className="mb-8">
                            also
                            <a
                                href="https://minimalissimo.shop/product/minimalist-writer-ii"
                                target="_blank"
                            >
                                minimalist-writer-ii
                            </a>{" "}
                            created by{" "}
                            <a href="https://manuelmoreale.com/">
                                Manuel Moreale
                            </a>
                            .
                        </p>
                    </div>
                </div>
            </main>
            {/* {{-- theme switcher pinned on top right --}} */}
            <div className="absolute top-0 right-0 h-12 w-18 p-4">
                <button
                    className="js-change-theme focus:outline-none"
                    onClick={switchTheme}
                >
                    ☀️
                </button>
            </div>
        </div>
    );
}
