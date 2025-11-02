import { clsx } from "clsx";
import { twMerge } from "tailwind-merge";

// Fonction cn en JavaScript pur
export function cn(...inputs) {
    return twMerge(clsx(inputs));
}
