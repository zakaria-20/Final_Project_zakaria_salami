<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Gym Registration</title>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center bg-white">

    <div class="w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="flex items-center justify-center">
                <svg width="40px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M862.736 88.2L588.472 362.456l12.528 12.528c2.792 8.792 8.344 17.952 16.368 25.984 8.024 8.016 17.192 13.576 25.976 16.36l10.816 10.824 274.408-274.4c11.944-11.952 8.128-34.88-10.48-53.496-18.624-18.616-43.408-24.008-55.352-12.056z" fill="#F7BB83"></path><path d="M654.16 444.152c-4.248 0-8.32-1.688-11.32-4.688l-8.24-8.248c-10.224-3.928-20.016-10.408-28.536-18.928-8.52-8.528-15-18.32-18.936-28.552l-9.96-9.96a16.008 16.008 0 0 1 0-22.632l274.264-274.256c7.216-7.224 17.008-11.04 28.312-11.04 16.632 0 35.192 8.64 49.656 23.104 24.68 24.68 29.184 57.4 10.496 76.112l-274.416 274.4a16.04 16.04 0 0 1-11.32 4.688z m-43.056-81.696l1.208 1.208c1.816 1.816 3.168 4.032 3.936 6.48 2.12 6.68 6.536 13.608 12.44 19.512 5.888 5.888 12.824 10.304 19.488 12.416 2.216 0.704 4.264 1.88 5.976 3.456l263.104-263.088c4.816-4.824 1.696-18.68-10.488-30.864-10.136-10.136-20.888-13.728-27.032-13.728-1.84 0-4.304 0.288-5.688 1.664L611.104 362.456z" fill="#6E4123"></path><path d="M676.752 73.824l-52.056 52.056 46.648 46.664c12.272 30.848 34.136 63.864 64.024 93.76 29.896 29.896 62.904 51.752 93.768 64.016l51.504 51.496 52.056-52.056c36.968-36.968 5.872-127.976-63.464-197.312-69.344-69.336-155.528-95.592-192.48-58.624z" fill="#F7BB83"></path><path d="M880.632 397.824a15.96 15.96 0 0 1-11.312-4.68l-49.208-49.2c-33.264-13.8-66.408-36.664-96.056-66.312-29.64-29.64-52.504-62.776-66.312-96.048l-44.36-44.376a16 16 0 0 1 0-22.624l52.056-52.056c14.016-14.024 33.88-21.44 57.432-21.44 47.872 0 108.288 30.68 157.672 80.064 78.136 78.136 106.6 176.808 63.464 219.944l-52.056 52.056a16 16 0 0 1-11.32 4.672zM647.32 125.888l35.336 35.352c1.536 1.536 2.752 3.376 3.552 5.4 11.88 29.864 33.36 61.24 60.472 88.36 27.128 27.12 58.504 48.592 88.368 60.464 2.024 0.808 3.856 2.008 5.4 3.552l40.184 40.184 40.744-40.744c26.248-26.248 4.688-106.536-63.464-174.688-42.944-42.944-95.952-70.688-135.048-70.688-15.088 0-26.8 4.056-34.808 12.064l-40.736 40.744z" fill="#6E4123"></path><path d="M685.914925 320.584783a180.976 94.648 44.999 1 0 133.850149-133.854821 180.976 94.648 44.999 1 0-133.850149 133.854821Z" fill="#F7BB83"></path><path d="M835.336 414.112c-48.44 0-110.024-31.504-160.728-82.208-35.976-35.976-62.552-77.384-74.84-116.616-13.4-42.768-8.496-78.608 13.808-100.904 13.856-13.848 33.488-21.168 56.792-21.168 48.44 0 110.032 31.504 160.736 82.2 35.976 35.976 62.552 77.392 74.84 116.616 13.4 42.776 8.504 78.608-13.808 100.904-13.848 13.856-33.488 21.176-56.8 21.176zM670.36 125.216c-14.84 0-26.336 3.968-34.168 11.792-13.264 13.264-15.416 38.312-5.888 68.712 10.768 34.392 34.536 71.168 66.928 103.552 44.24 44.24 98.456 72.832 138.104 72.832 14.848 0 26.344-3.968 34.168-11.792 13.264-13.264 15.416-38.312 5.888-68.712-10.776-34.384-34.536-71.168-66.928-103.56-44.24-44.232-98.448-72.824-138.104-72.824z" fill="#6E4123"></path><path d="M552.44 106.264l-70.736 70.744 63.416 63.416c16.664 41.936 46.376 86.8 86.992 127.416 40.616 40.624 85.488 70.328 127.424 87l69.976 69.984 70.744-70.744c50.232-50.248 8-173.912-86.224-268.144-94.24-94.24-211.352-129.92-261.592-79.672z" fill="#F7BB83"></path><path d="M829.512 540.816a16 16 0 0 1-11.312-4.688l-67.672-67.672c-44.872-18.408-89.664-49.232-129.728-89.304-40.08-40.08-70.896-84.864-89.296-129.72l-61.112-61.112a16 16 0 0 1 0-22.624l70.736-70.744c17.968-17.968 43.56-27.464 74-27.464 63.584 0 144.136 41.048 210.208 107.128 103.928 103.928 142.608 234.368 86.224 290.768l-70.744 70.744a15.976 15.976 0 0 1-11.304 4.688zM504.328 177.008l52.104 52.104c1.536 1.536 2.752 3.376 3.552 5.4 16.408 41.28 46.04 84.608 83.44 122.016 37.392 37.392 80.728 67.032 122.016 83.44 2.032 0.808 3.864 2.008 5.408 3.552l58.664 58.664 59.432-59.424c42.416-42.432 2.128-157.16-86.224-245.52-60.296-60.296-132.168-97.752-187.584-97.752-22.088 0-39.376 6.088-51.376 18.088l-59.432 59.432z" fill="#6E4123"></path><path d="M895.088 888.832c0 45.008-170.744 81.496-381.344 81.496-210.608 0-381.336-36.488-381.336-81.496 0-45.008 173.392-78.168 384-78.168 210.6 0.008 378.68 33.16 378.68 78.168z" fill="#B8CBCD"></path><path d="M565.975371 440.53649a245.944 128.632 44.999 1 0 181.909944-181.916294 245.944 128.632 44.999 1 0-181.909944 181.916294Z" fill="#F7BB83"></path><path d="M769.04 561.872c-64.36 0-146.504-42.16-214.376-110.024C450.8 347.984 414.368 221.704 471.712 164.36c17.72-17.712 43-27.08 73.128-27.08 64.36 0 146.504 42.16 214.368 110.024 48.248 48.248 83.864 103.696 100.288 156.144 17.536 55.984 11.384 102.64-17.336 131.344-17.72 17.72-43 27.08-73.12 27.08zM544.84 169.28c-21.76 0-38.744 5.96-50.496 17.704-43.168 43.168-5.176 154.096 82.952 242.232 61.152 61.144 136.416 100.656 191.752 100.656 21.752 0 38.744-5.96 50.496-17.704 19.88-19.88 23.224-55.096 9.432-99.16-14.912-47.608-47.72-98.416-92.384-143.08-61.16-61.136-136.416-100.648-191.752-100.648z" fill="#6E4123"></path><path d="M622.656 328.272L348.4 602.528l12.528 12.528c2.792 8.792 8.344 17.96 16.368 25.984 8.016 8.016 17.192 13.576 25.976 16.36l10.816 10.816 274.4-274.4c11.952-11.952 8.128-34.88-10.48-53.488-18.616-18.616-43.4-24.008-55.352-12.056z" fill="#F7BB83"></path><path d="M414.088 684.216a16 16 0 0 1-11.312-4.688l-8.256-8.248c-10.232-3.936-20.032-10.424-28.536-18.928-8.52-8.512-15.008-18.312-18.936-28.552l-9.96-9.96a16 16 0 0 1 0-22.624L611.344 316.96c7.224-7.224 17.016-11.04 28.312-11.04 16.632 0 35.192 8.64 49.664 23.104 11.168 11.168 18.664 24.52 21.112 37.608 2.8 14.92-1.08 28.96-10.632 38.504l-274.4 274.392a16 16 0 0 1-11.312 4.688z m-43.056-81.688l1.208 1.216a16 16 0 0 1 3.936 6.472c2.12 6.68 6.536 13.616 12.432 19.512 5.896 5.888 12.824 10.304 19.504 12.424 2.216 0.704 4.256 1.88 5.968 3.448l263.096-263.096c2.696-2.696 2.288-7.416 1.808-9.992-1.272-6.808-5.64-14.224-12.28-20.872-10.136-10.136-20.896-13.728-27.04-13.728-1.832 0-4.304 0.288-5.688 1.664L371.032 602.528z" fill="#6E4123"></path><path d="M184.896 473.8l-70.736 70.744 63.416 63.416c16.672 41.936 46.376 86.8 87 127.424 40.624 40.624 85.488 70.32 127.424 86.992l69.976 69.976 70.744-70.744c50.232-50.24 8.008-173.904-86.232-268.144-94.248-94.224-211.344-129.904-261.592-79.664z" fill="#F7BB83"></path><path d="M461.968 908.36a16 16 0 0 1-11.312-4.688l-67.672-67.672c-44.872-18.416-89.664-49.24-129.72-89.296-40.072-40.072-70.896-84.864-89.304-129.728l-61.112-61.112a16 16 0 0 1 0-22.624l70.736-70.744c17.968-17.968 43.552-27.456 74-27.456 63.584 0 144.128 41.048 210.208 107.128 103.936 103.928 142.624 234.368 86.232 290.768l-70.744 70.744a16.032 16.032 0 0 1-11.312 4.68zM136.784 544.544l52.104 52.104c1.544 1.536 2.752 3.376 3.552 5.4 16.416 41.288 46.048 84.624 83.448 122.024 37.384 37.384 80.72 67.016 122.016 83.44 2.024 0.808 3.864 2.016 5.4 3.552l58.664 58.656 59.432-59.432c42.424-42.432 2.128-157.152-86.232-245.512-60.296-60.296-132.176-97.752-187.584-97.752-22.088 0-39.376 6.088-51.376 18.088l-59.424 59.432z" fill="#6E4123"></path><path d="M202.1504 804.370834a245.936 128.632 44.999 1 0 181.909944-181.916294 245.936 128.632 44.999 1 0-181.909944 181.916294Z" fill="#F7BB83"></path><path d="M405.216 925.696c-64.36 0-146.504-42.168-214.36-110.032-48.248-48.24-83.864-103.696-100.296-156.144-17.536-55.992-11.376-102.632 17.336-131.344 17.712-17.712 43-27.08 73.112-27.08 64.36 0 146.504 42.16 214.368 110.024 48.248 48.248 83.864 103.696 100.296 156.144 17.528 55.992 11.376 102.632-17.344 131.352-17.712 17.712-42.992 27.08-73.112 27.08zM181.016 533.104c-21.752 0-38.736 5.96-50.488 17.704-19.88 19.88-23.232 55.096-9.432 99.16 14.912 47.6 47.72 98.416 92.384 143.08 61.144 61.144 136.4 100.656 191.736 100.656 21.752 0 38.744-5.96 50.496-17.704 19.88-19.88 23.224-55.096 9.424-99.16-14.912-47.608-47.72-98.416-92.376-143.08-61.152-61.152-136.408-100.656-191.744-100.656z" fill="#6E4123"></path><path d="M145.032 605.552L92.968 657.6l46.664 46.664c12.272 30.864 34.128 63.872 64.016 93.76 29.888 29.888 62.904 51.752 93.768 64.016l51.488 51.496 52.064-52.048c36.968-36.968 5.88-127.968-63.464-197.312-69.328-69.344-155.512-95.592-192.472-58.624z" fill="#F7BB83"></path><path d="M348.904 929.536a15.92 15.92 0 0 1-11.312-4.688l-49.2-49.2c-33.264-13.792-66.416-36.664-96.056-66.312-29.648-29.64-52.512-62.784-66.312-96.048l-44.368-44.376a16 16 0 0 1 0-22.632l52.064-52.048c14.024-14.024 33.88-21.44 57.432-21.44 47.872 0 108.288 30.68 157.672 80.064 78.136 78.128 106.6 176.792 63.464 219.936l-52.064 52.056a15.968 15.968 0 0 1-11.32 4.688zM115.6 657.6l35.344 35.352c1.544 1.536 2.752 3.376 3.552 5.4 11.872 29.856 33.344 61.24 60.464 88.36 27.12 27.12 58.504 48.592 88.36 60.464 2.024 0.808 3.864 2.008 5.4 3.552l40.176 40.176 40.752-40.744c26.248-26.248 4.688-106.536-63.464-174.68-42.944-42.944-95.952-70.696-135.04-70.696-15.088 0-26.8 4.056-34.808 12.064L115.6 657.6z" fill="#6E4123"></path><path d="M154.206239 852.300097a180.976 94.648 44.999 1 0 133.850149-133.854822 180.976 94.648 44.999 1 0-133.850149 133.854822Z" fill="#F7BB83"></path><path d="M303.624 945.824c-48.44 0-110.024-31.504-160.728-82.208-35.976-35.976-62.56-77.384-74.84-116.616-13.4-42.776-8.496-78.608 13.808-100.904 13.848-13.848 33.48-21.168 56.792-21.168 48.44 0 110.024 31.504 160.728 82.208 35.984 35.976 62.56 77.392 74.848 116.616 13.4 42.776 8.496 78.608-13.808 100.904-13.856 13.848-33.496 21.168-56.8 21.168zM138.648 656.936c-14.848 0-26.344 3.968-34.168 11.792-13.264 13.264-15.416 38.312-5.888 68.712 10.768 34.384 34.536 71.168 66.928 103.552 44.248 44.24 98.456 72.832 138.104 72.832 14.848 0 26.336-3.968 34.168-11.792 13.272-13.272 15.416-38.312 5.896-68.712-10.776-34.384-34.544-71.168-66.936-103.56-44.248-44.24-98.456-72.824-138.104-72.824z" fill="#6E4123"></path><path d="M178.768 772.16l-54.36 54.504 9.672 15.232c2.776 8.792 8.336 17.968 16.36 25.984 8.016 8.024 17.184 13.576 25.984 16.36l10.816 10.816 57.36-57.36c11.944-11.952 8.12-34.88-10.488-53.488-18.616-18.6-43.384-24-55.344-12.048z" fill="#F7BB83"></path><path d="M187.24 911.072a15.92 15.92 0 0 1-11.312-4.688l-8.248-8.248c-10.232-3.928-20.032-10.408-28.552-18.928-9.024-9.024-15.776-19.488-19.608-30.368l-8.624-13.592a16 16 0 0 1 2.184-19.872l54.36-54.504c7.24-7.24 17.032-11.064 28.336-11.064 16.624 0 35.184 8.64 49.656 23.104 24.68 24.68 29.192 57.4 10.488 76.112l-57.36 57.36a16 16 0 0 1-11.32 4.688z m-42.464-82.168l2.808 4.424c0.744 1.168 1.336 2.44 1.752 3.76 2.104 6.664 6.512 13.584 12.416 19.488 5.896 5.896 12.824 10.312 19.496 12.424 2.224 0.704 4.264 1.88 5.976 3.456l46.056-46.056c4.816-4.816 1.696-18.68-10.488-30.864-10.136-10.136-20.896-13.728-27.024-13.728-1.832 0-4.312 0.288-5.696 1.672l-45.296 45.424z" fill="#6E4123"></path><path d="M148.033099 880.152979a46.448 28.584 44.999 1 0 40.423175-40.424586 46.448 28.584 44.999 1 0-40.423175 40.424586Z" fill="#F7BB83"></path><path d="M185.672 914.512c-16.216 0-34.512-8.616-48.944-23.048-10.832-10.832-18.496-23.88-21.56-36.744-3.664-15.4-0.416-29.592 8.928-38.936 6.816-6.816 16.064-10.416 26.752-10.416 16.208 0 34.504 8.616 48.936 23.048 10.832 10.832 18.496 23.888 21.56 36.752 3.664 15.4 0.416 29.6-8.928 38.936-6.816 6.808-16.064 10.408-26.744 10.408z m-34.824-77.152c-1.928 0-3.472 0.392-4.128 1.048-0.992 0.984-1.544 4.192-0.424 8.888 1.68 7.072 6.448 14.92 13.056 21.528 13.424 13.432 27.8 15.256 30.432 12.64 0.984-0.984 1.544-4.192 0.424-8.888-1.688-7.072-6.448-14.928-13.056-21.536-10.088-10.096-20.472-13.68-26.304-13.68z" fill="#6E4123"></path><path d="M722.872 57.072c34.584 0 78.48 18.352 119.616 51.376l20.248-20.248c4.304-4.304 10.256-6.352 17-6.352 11.984 0 26.424 6.496 38.344 18.416 18.608 18.608 22.432 41.536 10.48 53.496l-22.504 22.512c42.168 59.928 56.168 123.968 26.632 153.504l-18.008 18.008c12.192 44.312 8.744 83.12-14.432 106.296l-69.368 69.368-0.04 0.04-0.04 0.04-1.296 1.296-0.064-0.064c-15.104 14.288-36.008 21.072-60.44 21.072-46.776 0-106.464-24.88-162.944-69.592l-121.04 121.048c66.208 85.696 90.424 181.584 47.688 224.328l-65.68 65.688v0.008l-5.048 5.048-0.28-0.28c-14.704 11.912-34.112 17.592-56.464 17.592-14.2 0-29.592-2.288-45.72-6.736l-10.36 10.36-0.032 0.04a0.176 0.176 0 0 0-0.04 0.032l-0.152 0.16-0.016-0.016c-11.144 11.024-26.8 16.24-45.16 16.24-29.48 0-65.936-13.456-101.912-37.968-0.272 0.312-0.424 0.696-0.712 0.992-3.88 3.88-9.272 5.728-15.432 5.728-11.56 0-25.792-6.528-37.624-18.36-13.48-13.472-20.024-30.016-17.952-42.224l-0.416-9.584-1.64-5.448C77.488 759.08 61.28 689.68 92.992 657.624l-0.024-0.024 10.6-10.6c-11.432-41.512-8.616-78.136 10.864-102.176l-0.28-0.28 70.736-70.744c15.44-15.44 37.2-22.768 62.664-22.76 50.072 0 114.496 28.312 173.456 78.872L539.36 411.568c-75.128-88.904-101.056-188.584-57.6-234.504l-0.056-0.056 1.168-1.168 0.152-0.168 0.168-0.152 69.248-69.256c15.432-15.432 37.176-22.744 62.632-22.744 14.128 0 29.4 2.248 45.368 6.616l16.312-16.312c11.36-11.36 27.368-16.752 46.12-16.752m0-32c-27.888 0-51.664 9.04-68.752 26.136l-3.776 3.776c-12.192-2.296-24-3.456-35.272-3.456-34.768 0-64.256 11.104-85.264 32.112l-68.88 68.888-0.336 0.328-0.76 0.776-0.76 0.76a31.36 31.36 0 0 0-2.4 2.688c-49.016 54.648-32.352 155.224 39.88 252.056l-77.864 77.864c-57.696-43.448-118.872-67.944-171.128-67.944-34.776 0-64.264 11.112-85.296 32.136l-70.736 70.744a31.84 31.84 0 0 0-5.624 7.584c-19.552 27.36-25.592 64.84-17.488 107.52-40.432 43.504-28.592 122.504 29.592 199.344l0.008 0.216c-2.216 22.176 7.832 46.632 27.416 66.2 17.616 17.616 39.576 27.728 60.248 27.728 5.016 0 9.888-0.616 14.512-1.808 35.952 21.424 72.176 33.064 103.544 33.064 26.384 0 49.048-8.168 65.744-23.656 12.384 2.368 24.344 3.56 35.744 3.56 27.88 0 52.624-7.312 71.984-21.2 2.656-1.424 5.152-3.248 7.392-5.48l5.048-5.048 0.128-0.128 65.56-65.568c49.52-49.52 37.272-147.248-28.376-243.64l82.208-82.216c54.728 38.024 111.84 59.44 159.832 59.44 32.168 0 59.864-9.624 80.296-27.864 0.968-0.768 1.904-1.592 2.8-2.488l1.272-1.272 0.4-0.4 69.104-69.104c27.264-27.264 36.616-69.016 27.008-118.872l5.432-5.432c36.6-36.608 32.816-102.32-8.344-171.8l4.224-4.224c25.152-25.168 20.64-67.616-10.488-98.744-17.656-17.656-39.88-27.784-60.968-27.784-15.416 0-29.488 5.584-39.632 15.728l-0.832 0.84c-39.592-26.52-80.92-41.36-116.4-41.36z" fill="#6E4123"></path></g></svg>
            <h1 class="text-2xl font-bold text-center text-gray-900 mb-4 pt-2 pl-2">Join Our Gym</h1>
        </div>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
    
            <!-- Step 1: Personal Information -->
            <div id="step-1" class="space-y-4">
                <!-- Avatar Section -->
                <div class="flex justify-center">
                    <div class="relative">
                        <img id="avatar-preview" 
                            src="https://via.placeholder.com/100" 
                            alt="Avatar Preview" 
                            class="w-24 h-24 rounded-full object-cover border-2 border-[#f9ac54] shadow">
                        <label for="photo" class="absolute bottom-0 right-0 bg-[#f9ac54] text-white rounded-full p-1 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </label>
                    </div>
                </div>
    
                <input type="file" id="photo" name="image" accept="image/*" class="hidden" onchange="previewAvatar(event)">
    
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="name" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                    <span id="error-name" class="text-red-500 text-sm hidden">Full name is required.</span>
                </div>
    
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                    <span id="error-email" class="text-red-500 text-sm hidden">Valid email is required.</span>
                </div>
                <input type="hidden" name="role" value="{{ $role->id }}">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                    <span id="error-password" class="text-red-500 text-sm hidden">Password is required.</span>
                </div>
    
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                    <span id="error-password-confirmation" class="text-red-500 text-sm hidden">Password confirmation is required.</span>
                </div>
    
                <div class="text-center">
                    <button type="button" id="next-button" 
                        class="w-full py-2 bg-[#f9ac54] text-white font-bold rounded-md hover:bg-[#f9ac54]/90 focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                        Next Step
                    </button>
                </div>
            </div>
    
            <!-- Step 2: Physical Details -->
            <div id="step-2" class="space-y-4 hidden">
                <div>
                    <label for="length" class="block text-sm font-medium text-gray-700">Age </label>
                    <input type="number" id="length" name="age" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                </div>
    
                <div>
                    <label for="width" class="block text-sm font-medium text-gray-700">weight (kg)</label>
                    <input type="number" id="width" name="weight" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                </div>
                <div>
                    <label for="width" class="block text-sm font-medium text-gray-700">hei (cm)</label>
                    <input type="number" id="width" name="height" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                </div>
                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select id="gender" name="gender" required 
                        class="mt-1 w-full p-2 rounded-md border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
                <div class="w-full mt-4">
                    <label for="activity" class="text-[#FF9D52] font-medium">Activity Level</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="activity" value="1.2" class="focus:ring-yellow-500 focus:ring-offset-2 text-yellow-400" required>
                            <span class="ml-2">Little or no exercise</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="activity" value="1.375" class="focus:ring-yellow-500 focus:ring-offset-2 text-yellow-400" required>
                            <span class="ml-2">Sports 1–3 days/week</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="activity" value="1.55" class="focus:ring-yellow-500 focus:ring-offset-2 text-yellow-400" required>
                            <span class="ml-2">Sports 3–5 days/week</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="activity" value="1.725" class="focus:ring-yellow-500 focus:ring-offset-2 text-yellow-400" required>
                            <span class="ml-2">Sports 6–7 days/week</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="activity" value="1.9" class="focus:ring-yellow-500 focus:ring-offset-2 text-yellow-400" required>
                            <span class="ml-2">Twice daily</span>
                        </label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" 
                        class="w-full py-2 bg-[#f9ac54] text-white font-bold rounded-md hover:bg-[#f9ac54]/90 focus:outline-none focus:ring-1 focus:ring-[#f9ac54]">
                        Complete Registration
                    </button>
                </div>
                </div>
    
                
            </div>
        </form>
    </div>
    
    <script>
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');
        const nextButton = document.getElementById('next-button');
        const photoInput = document.getElementById('photo');
    
        nextButton.addEventListener('click', () => {
            // Validate Step 1
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            const avatarError = document.getElementById('error-avatar');
            
            let isValid = true;
    
            // Clear previous error messages
            document.querySelectorAll('.text-red-500').forEach(error => error.classList.add('hidden'));
    
            // Check each field
            if (!name.value.trim()) {
                document.getElementById('error-name').classList.remove('hidden');
                isValid = false;
            }
    
            if (!email.value.trim() || !email.validity.valid) {
                document.getElementById('error-email').classList.remove('hidden');
                isValid = false;
            }
    
            if (!password.value.trim()) {
                document.getElementById('error-password').classList.remove('hidden');
                isValid = false;
            }
    
            if (!passwordConfirmation.value.trim()) {
                document.getElementById('error-password-confirmation').classList.remove('hidden');
                isValid = false;
            }
    
            // Validate avatar (image input)
            if (!photoInput.files.length) {
                avatarError.textContent = 'Avatar image is required.';
                avatarError.classList.remove('hidden');
                isValid = false;
            } else {
                const file = photoInput.files[0];
                const validTypes = ['image/jpeg', 'image/png', 'image/gif'];
                if (!validTypes.includes(file.type)) {
                    avatarError.textContent = 'Invalid image format. Only JPEG, PNG, or GIF are allowed.';
                    avatarError.classList.remove('hidden');
                    isValid = false;
                }
            }
    
            // Move to Step 2 only if valid
            if (isValid) {
                step1.classList.add('hidden');
                step2.classList.remove('hidden');
            }
        });
    
        function previewAvatar(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
    
            reader.onload = function(e) {
                const preview = document.getElementById('avatar-preview');
                preview.src = e.target.result;
            };
    
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    
</body>
</html>
