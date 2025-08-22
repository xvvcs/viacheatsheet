<x-inside-layout :sections="[
    ['id' => 'overview', 'label' => 'License Overview'],
    ['id' => 'copyright', 'label' => 'Copyright Notice'],
    ['id' => 'restrictions', 'label' => 'Usage Restrictions'],
    ['id' => 'permitted', 'label' => 'Permitted Use'],
    ['id' => 'contact', 'label' => 'License Inquiries']
]">
    <x-slot:heading>Licensing & Copyright</x-slot:heading>

    <!-- License Overview -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="overview">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">License Overview</h2>
        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-red-700">
                        <strong>All Rights Reserved License:</strong> This content is protected by copyright and may not be reproduced, distributed, or used without explicit permission.
                    </p>
                </div>
            </div>
        </div>
        <p class="text-neutral-700 leading-relaxed mb-4">
            The VIA Student Cheatsheet website, including all content, design elements, code, documentation, and materials, is licensed under a restrictive "All Rights Reserved" license. This means that all intellectual property rights are retained by the original authors.
        </p>
        <p class="text-neutral-700 leading-relaxed">
            While we provide this information freely for educational purposes to help VIA University College students, we maintain exclusive rights to our work and expect these rights to be respected by all users and visitors.
        </p>
    </div>

    <!-- Copyright Notice -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="copyright">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Copyright Notice</h2>
        <div class="bg-gray-900 text-white p-6 rounded-lg font-mono text-sm mb-4">
            <div class="text-center">
                <p class="mb-2">© 2025 VIA Student Cheatsheet</p>
                <p class="mb-2">Created by Matuszewski & Terelak</p>
                <p class="mb-4 text-red-400 font-semibold">ALL RIGHTS RESERVED</p>
                <hr class="border-gray-600 my-4">
                <p class="text-xs text-gray-400">
                    This work is protected under international copyright law.<br>
                    Unauthorized reproduction or distribution is strictly prohibited.
                </p>
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <h3 class="font-semibold text-gray-900 mb-2">What is Protected</h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span>All written content, guides, and informational materials</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span>Website design, layout, and user interface elements</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span>Source code, scripts, and technical implementations</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span>Graphics, images, icons, and visual assets (where original)</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span>Brand name "VIA Student Cheatsheet" and associated branding</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-red-500 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        <span>Organizational structure and information architecture</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Usage Restrictions -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="restrictions">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Usage Restrictions</h2>
        <p class="text-neutral-700 leading-relaxed mb-6">
            Under this license, the following activities are <strong>strictly prohibited</strong> without explicit written permission from the copyright holders:
        </p>

        <div class="grid md:grid-cols-2 gap-4 mb-6">
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h3 class="font-semibold text-red-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 008.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                    Commercial Use
                </h3>
                <ul class="text-red-800 text-sm space-y-1">
                    <li>• Selling or monetizing the content</li>
                    <li>• Using content in paid services</li>
                    <li>• Incorporating into commercial products</li>
                </ul>
            </div>

            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h3 class="font-semibold text-red-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 008.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                    Reproduction & Distribution
                </h3>
                <ul class="text-red-800 text-sm space-y-1">
                    <li>• Copying content to other websites</li>
                    <li>• Redistributing materials</li>
                    <li>• Creating derivative works</li>
                </ul>
            </div>

            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h3 class="font-semibold text-red-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 008.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                    Modification
                </h3>
                <ul class="text-red-800 text-sm space-y-1">
                    <li>• Altering or modifying content</li>
                    <li>• Creating adapted versions</li>
                    <li>• Reverse engineering</li>
                </ul>
            </div>

            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <h3 class="font-semibold text-red-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 008.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                    Attribution Removal
                </h3>
                <ul class="text-red-800 text-sm space-y-1">
                    <li>• Removing copyright notices</li>
                    <li>• Claiming authorship</li>
                    <li>• Misrepresenting ownership</li>
                </ul>
            </div>
        </div>

        <div class="bg-amber-50 border-l-4 border-amber-500 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.336-.213 3.011-1.743 3.011H4.42c-1.53 0-2.493-1.675-1.743-3.011l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-amber-700">
                        <strong>Legal Notice:</strong> Violation of these terms may result in legal action. We actively monitor for unauthorized use of our content and will pursue appropriate remedies under copyright law.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Permitted Use -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="permitted">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">Permitted Use</h2>
        <p class="text-neutral-700 leading-relaxed mb-4">
            Despite the restrictive license, we do allow certain limited uses for educational and personal purposes:
        </p>

        <div class="space-y-4">
            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <h3 class="font-semibold text-green-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Personal Educational Use
                </h3>
                <p class="text-green-800 text-sm">
                    VIA University College students may use the information for their personal educational needs, including taking notes and referencing during their studies.
                </p>
            </div>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <h3 class="font-semibold text-green-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Brief Quotations
                </h3>
                <p class="text-green-800 text-sm">
                    Brief quotations (up to 100 words) are permitted for academic purposes, provided proper attribution is given and the source is clearly cited.
                </p>
            </div>

            <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                <h3 class="font-semibold text-green-900 mb-2 flex items-center">
                    <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Linking & Referencing
                </h3>
                <p class="text-green-800 text-sm">
                    You may link to our website and reference it as a source, provided you do not frame our content or present it as your own work.
                </p>
            </div>
        </div>

        <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mt-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-700">
                        <strong>When in doubt, ask:</strong> If you're unsure whether your intended use falls within these permissions, please contact us for clarification before proceeding.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- License Inquiries -->
    <div class="bg-white rounded-2xl shadow p-6 mb-10 dark:bg-neutral-100" id="contact">
        <h2 class="text-2xl font-bold mb-3 text-neutral-900">License Inquiries</h2>
        <p class="text-neutral-700 leading-relaxed mb-6">
            If you wish to use our content beyond the permitted uses outlined above, or if you have questions about licensing, please contact us.
        </p>

        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <h3 class="font-semibold text-gray-900 mb-3">What We Might Consider</h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-blue-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Educational institution partnerships
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-blue-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Non-profit educational uses
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-blue-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Research collaborations
                    </li>
                    <li class="flex items-start">
                        <svg class="w-4 h-4 text-blue-500 mr-2 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Student organization partnerships
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-gray-900 mb-3">How to Contact Us</h3>
                <div class="space-y-3">
                    <a href="https://github.com/xvvcs/viacheatsheet/issues" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Contact Us via GitHub Issues
                    </a>
                    <p class="text-sm text-gray-600">
                        Please provide detailed information about your intended use, including purpose, scope, and duration.
                    </p>
                </div>

                <div class="mt-4 p-3 bg-gray-50 rounded-lg">
                    <p class="text-xs text-gray-600">
                        <strong>Processing Time:</strong> License inquiries are typically reviewed within 5-10 business days. We will respond with either approval, conditions, or alternative suggestions.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Final Notice -->
    <div class="bg-gradient-to-r from-red-50 to-orange-50 rounded-2xl shadow p-6 border border-red-200">
        <div class="text-center">
            <div class="flex justify-center mb-4">
                <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">This License is Legally Binding</h3>
            <p class="text-gray-700 mb-4">
                By accessing and using this website, you agree to be bound by the terms of this license.
                Unauthorized use may result in legal action under applicable copyright laws.
            </p>
            <p class="text-sm text-gray-600 italic">
                Last updated: January 2025 • This license may be updated from time to time
            </p>
        </div>
    </div>

</x-inside-layout>
