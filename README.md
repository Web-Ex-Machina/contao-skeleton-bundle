# Contao Skeleton Bundle

A Simple Starter Bundle for Contao 5+ and PHP 8.2+

This repository provides a skeleton bundle for Contao 5+, designed to help you quickly create your own Contao bundle while following modern PHP development practices. It includes tools like Easy Coding Standard and Rector to help you maintain clean and structured code.

> [!WARNING]
>  **Important:** This bundle is experimental, any contributions are welcome!

## Features

- Compatible with Contao 5+ and PHP 8.2+
- Pre-configured with modern best practices
- Includes Easy Coding Standard for code styling
- Uses Rector for automated refactoring

---

## Installation Guide

To use this bundle, follow these steps:

### Step 1: Download and Extract

1. Download the repository as a ZIP file (you can do this from the "Code" dropdown in GitHub).
2. Extract the ZIP file to your desired development location.

---

### Step 2: Rename Files and Namespace

You need to rename certain files and namespaces to customize the bundle for your needs:

1. **Rename vendor and bundle names**:
    - Replace all instances of `WebExMachina` with your **Vendor Name** (e.g., `MyCompany`).
    - Replace all instances of `SkeletonBundle` with your **Bundle Name** (e.g., `CustomBundle`).

2. Ensure this renaming is done both:
    - In directory/file names.
    - Inside the file contents (e.g., namespaces, classes, configuration files).

> [!TIP]
> Use a text editor or IDE with a global find-and-replace feature to ensure all occurrences are updated.

---

### Step 3: Install Dependencies

Run the following commands in your terminal to install any required dependencies with Composer.

---

### Troubleshooting

If you encounter any issues:
- Ensure that you use PHP 8.2+.
- Check that all references to `WebExMachina` and `SkeletonBundle` are renamed properly.

---

## Contribution

This bundle is experimental and contributions are welcome! If you find a bug or have suggestions for improvements, feel free to submit an issue or pull request.

---

## License

This project is licensed under the [Apache 2.0](https://github.com/Web-Ex-Machina/contao-skeleton-bundle?tab=Apache-2.0-1-ov-file).
