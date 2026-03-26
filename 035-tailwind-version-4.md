# 035. Tailwind CSS v.4 & Vite Hot Reloading

Now we will set up Tailwind CSS, version 4, in our Laravel project.
Tailwind CSS is a utility-first CSS framework that is easy to use and customize.
It is a great choice for building modern and responsive web applications.

There are a few ways to implement Tailwind.
We can use the CDN, but that's not really recommended for production.
We're going to install Tailwind using NPM.
This way, we can customize the configuration and build the CSS file.
The CSS will only include the classes that we are using, which reduces the file size.
Also, we will use Vite as our frontend development tool, which includes hot reloading.
Up to this point, if you're using Laravel Herd or something other than the Artisan server, we've had to refresh manually after every change.
After setting up Vite and running the server, it should refresh automatically when we save a file, which is nice.

## Tailwind Setup Using NPM

At https://tailwindcss.com/docs/installation/framework-guides/laravel/vite, there are instructions on how to set up Tailwind, version 4, in a Laravel project.
We will mostly follow along with these instructions.

NPM stands for Node Package Manager.
It is a package manager for JavaScript.
It is used to install and manage packages for a project.
If you are coming from the JavaScript world, you are probably already familiar with NPM.
If not, don't worry, it is easy to use.

You do need to install Node.js to use NPM.
You can download it from https://nodejs.org/en/.
Once you have Node.js installed, you will also have NPM installed.

### Install Tailwind CSS, version 4

As mentioned, the instructions to install Tailwind CSS, version 4, are at \
https://tailwindcss.com/docs/installation/framework-guides/laravel/vite.

1. The first step in those instructions is to create a Laravel project.
   We have already done this.

2. Open a terminal window in the project directory.
   Run the following command to install Tailwind CSS :

```bash
npm install tailwindcss @tailwindcss/vite
```

3. The third step tells what the contents of `vite.config.ts` should be.
   **_This instruction is incomplete!_**

Here is what you should do instead. \
Either do nothing at all.
The reason is that you should already have a viable `vite.config.js` file in the root of the project. It was created when the project itself was created.
This should hold true whether you created the project via `composer create-project laravel/laravel <project-name>` – **_or_** via `laravel new <project-name>` – **_or_** via Laravel Herd.
In either of those three cases, the contents of your `vite.config.js` file should be :

```javascript
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    tailwindcss(),
  ],
  server: {
    watch: {
      ignored: ['**/storage/framework/views/**'],
    },
  },
});
```

One thing you could do is make this file a TypeScript file by simply changing the extension from `js` to `ts`, thus renaming `vite.config.js` to `vite.config.ts`.

4. Also, from the creation of the project, your `resources/css/app.css` file should already have the following content:

```css
@import 'tailwindcss';

@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
@source '../../storage/framework/views/*.php';
@source '../**/*.blade.php';
@source '../**/*.js';

@theme {
  --font-sans:
    'Instrument Sans', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
    'Segoe UI Symbol', 'Noto Color Emoji';
}
```

Now we just need to include the CSS file in the layout.
Open the `resources/views/layout.blade.php` file and add the following code just above the title:

```html
@vite('resources/css/app.css')
```

## Build Tailwind CSS

Now we need to build the Tailwind CSS file.
We can have it watch for changes by running the following command:

```bash
npm run dev
```

So from now on, you will run `npm run dev` to build the Tailwind CSS file.
This will watch for changes and rebuild the file when changes are made.
Hot reloading should also work now.
