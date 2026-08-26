/**
 * Tailwind CSS Configuration
 * Centralized theme setup for STUDIO_X / Hixed.nd
 */

tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        surface: "#121414",
        "surface-container": "#1e2020",
        "surface-container-lowest": "#0c0f0f",
        "surface-container-low": "#1a1c1c",
        "surface-container-high": "#282a2b",
        "surface-container-highest": "#333535",
        "surface-variant": "#333535",
        "surface-dim": "#121414",
        "surface-bright": "#37393a",
        "surface-tint": "#c9c6c5",
        "primary-container": "#0a0a0a",
        "on-primary-container": "#7b7979",
        "secondary-container": "#0266ff",
        "on-secondary-container": "#f9f7ff",
        "on-surface": "#e2e2e2",
        "on-surface-variant": "#c4c7c7",
        outline: "#8e9192",
        "outline-variant": "#444748",
        primary: "#c9c6c5",
        "on-primary": "#313030",
        "primary-fixed": "#e5e2e1",
        "primary-fixed-dim": "#c9c6c5",
        "on-primary-fixed": "#1c1b1b",
        "on-primary-fixed-variant": "#474646",
        secondary: "#b3c5ff",
        "on-secondary": "#002b75",
        "secondary-fixed": "#dae1ff",
        "secondary-fixed-dim": "#b3c5ff",
        "on-secondary-fixed": "#001849",
        "on-secondary-fixed-variant": "#003fa4",
        tertiary: "#b7c8e1",
        "on-tertiary": "#213145",
        "tertiary-container": "#000a1a",
        "on-tertiary-container": "#6a7a92",
        "tertiary-fixed": "#d3e4fe",
        "tertiary-fixed-dim": "#b7c8e1",
        "on-tertiary-fixed": "#0b1c30",
        "on-tertiary-fixed-variant": "#38485d",
        error: "#ffb4ab",
        "error-container": "#93000a",
        "on-error": "#690005",
        "on-error-container": "#ffdad6",
        background: "#121414",
        "on-background": "#e2e2e2",
        "inverse-surface": "#e2e2e2",
        "inverse-on-surface": "#2f3131",
        "inverse-primary": "#5f5e5e",
      },
      spacing: {
        base: "8px",
        "margin-mobile": "20px",
        "margin-desktop": "64px",
        gutter: "24px",
        "section-gap": "160px",
        "container-max": "1280px",
      },
      fontFamily: {
        sans: ["Inter", "sans-serif"],
      },
      fontSize: {
        display: [
          "72px",
          { lineHeight: "1.1", letterSpacing: "-.04em", fontWeight: "800" },
        ],
        "display-mobile": [
          "40px",
          { lineHeight: "1.1", letterSpacing: "-.02em", fontWeight: "800" },
        ],
        "display-lg": [
          "72px",
          { lineHeight: "1.1", letterSpacing: "-0.04em", fontWeight: "800" },
        ],
        "display-lg-mobile": [
          "40px",
          { lineHeight: "1.1", letterSpacing: "-0.02em", fontWeight: "800" },
        ],
        headline: [
          "32px",
          { lineHeight: "1.2", letterSpacing: "-.02em", fontWeight: "600" },
        ],
        "headline-md": [
          "32px",
          { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "600" },
        ],
        label: [
          "12px",
          { lineHeight: "1", letterSpacing: ".1em", fontWeight: "700" },
        ],
        "label-caps": [
          "12px",
          { lineHeight: "1", letterSpacing: "0.1em", fontWeight: "700" },
        ],
        "body-md": [
          "16px",
          { lineHeight: "1.6", letterSpacing: "0em", fontWeight: "400" },
        ],
        "body-lg": [
          "18px",
          { lineHeight: "1.6", letterSpacing: "0em", fontWeight: "400" },
        ],
      },
      borderRadius: {
        DEFAULT: "0.25rem",
        lg: "0.5rem",
        xl: "0.75rem",
        full: "9999px",
      },
    },
  },
};
