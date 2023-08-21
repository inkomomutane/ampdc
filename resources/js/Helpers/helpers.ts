export const statusBg = (statusEunm: string | null): string => {
    switch (statusEunm) {
        case "Feito":
            return "bg-green-500";
        case "Em andamento":
            return "bg-orange-500";
        case "Pendente":
            return "bg-primary-500";
        case "Não feito":
            return "bg-red-500";
        case "Recusado":
            return "bg-red-500";
        default:
            return "bg-red-500";
    }
};
